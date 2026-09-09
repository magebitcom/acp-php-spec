<?php
/**
 * @author    Magebit <info@magebit.com>
 * @copyright Copyright (c) Magebit, Ltd. (https://magebit.com)
 * @license   MIT
 */
declare(strict_types=1);

namespace Magebit\AcpSpecGenerator\Test;

use Magebit\AcpSpecGenerator\InterfaceBuilder;
use Magebit\AcpSpecGenerator\PhpDocGenerator;
use Magebit\AcpSpecGenerator\SchemaParser;
use Magebit\AcpSpecGenerator\TypeMapper;
use Nette\PhpGenerator\PhpFile;
use PHPUnit\Framework\TestCase;

/**
 * Covers composition across bundles, constant emission and the dedup key
 */
class InterfaceBuilderTest extends TestCase
{
    use TempDirectoryTrait;

    /**
     * Merging another bundle's properties carries its internal refs, which mean nothing in the
     * merged document. Losing them silently degrades every affected getter to mixed.
     *
     * @return void
     */
    public function testInternalRefsSurviveAnAllOfMergeAcrossBundles(): void
    {
        $dir = $this->makeTempDir();
        file_put_contents($dir . '/schema.agentic_checkout.json', json_encode([
            '$defs' => [
                'Total' => ['type' => 'object', 'properties' => ['amount' => ['type' => 'integer']]],
                'CheckoutSessionBase' => [
                    'type' => 'object',
                    'properties' => ['totals' => ['type' => 'array', 'items' => ['$ref' => '#/$defs/Total']]],
                ],
            ],
        ]));
        file_put_contents($dir . '/schema.discount.json', json_encode([
            '$defs' => [
                'checkout_with_discount' => [
                    'allOf' => [
                        ['$ref' => 'schema.agentic_checkout.json#/$defs/CheckoutSessionBase'],
                        ['type' => 'object', 'properties' => ['discounts' => ['type' => 'array']]],
                    ],
                ],
            ],
        ]));

        $parser = new SchemaParser($dir);
        $typeMapper = new TypeMapper($parser);
        $builder = new InterfaceBuilder($parser, $typeMapper, new PhpDocGenerator($parser, $typeMapper));

        $discountFile = $dir . '/schema.discount.json';
        $merged = $builder->resolveCompositeSchema(
            $parser->getDefinitions($discountFile)['checkout_with_discount'],
            $discountFile
        );

        $this->assertSame(['totals', 'discounts'], array_keys($merged['properties']));
        $this->assertSame(
            '\\Magebit\\AcpSpec\\Api\\AgenticCheckout\\TotalInterface',
            $typeMapper->getArrayItemType($merged['properties']['totals'], $discountFile)
        );
    }

    /**
     * A oneOf that only constrains which properties are required must not replace the real shape.
     *
     * @return void
     */
    public function testOneOfDoesNotOverrideDeclaredProperties(): void
    {
        $builder = $this->makeBuilder();
        $merged = $builder->resolveCompositeSchema([
            'type' => 'object',
            'properties' => ['type' => ['type' => 'string'], 'challenge' => ['type' => 'object']],
            'oneOf' => [
                ['properties' => ['type' => ['const' => 'fingerprint']], 'required' => ['fingerprint']],
                ['properties' => ['type' => ['const' => 'challenge']], 'required' => ['challenge']],
            ],
        ], '/spec/schema.delegate_authentication.json');

        $this->assertSame(['type', 'challenge'], array_keys($merged['properties']));
    }

    /**
     * @return void
     */
    public function testAllOfIsMergedIntoASinglePropertySet(): void
    {
        $dir = $this->makeTempDir();
        file_put_contents($dir . '/schema.base.json', json_encode([
            'type' => 'object',
            'properties' => ['id' => ['type' => 'string']],
            'required' => ['id'],
        ]));

        $merged = $this->makeBuilder($dir)->resolveCompositeSchema([
            'allOf' => [
                ['$ref' => 'schema.base.json'],
                ['type' => 'object', 'properties' => ['amount' => ['type' => 'integer']], 'required' => ['id']],
            ],
        ], $dir . '/schema.card.json');

        $this->assertSame(['id', 'amount'], array_keys($merged['properties']));
        $this->assertSame(['id'], $merged['required']);
    }

    /**
     * @return void
     */
    public function testEnumAndConstBecomeConstants(): void
    {
        $file = $this->makeBuilder()->buildInterface('Message', [
            'type' => 'object',
            'properties' => [
                'type' => ['const' => 'error'],
                'severity' => ['type' => 'string', 'enum' => ['low', 'critical']],
                'channel' => ['type' => 'string', 'enum' => ['01', '3ds']],
            ],
            'required' => ['type'],
        ], 'Magebit\\AcpSpec\\Api\\AgenticCheckout', '/spec/schema.agentic_checkout.json');

        $constants = $file->getClasses()['Magebit\\AcpSpec\\Api\\AgenticCheckout\\MessageInterface']
            ->getConstants();

        $this->assertSame('error', $constants['TYPE_ERROR']->getValue());
        $this->assertSame('critical', $constants['SEVERITY_CRITICAL']->getValue());
        $this->assertSame('01', $constants['CHANNEL_01']->getValue());
        $this->assertSame('3ds', $constants['CHANNEL_3DS']->getValue());
        $this->assertSame('severity', $constants['KEY_SEVERITY']->getValue());
    }

    /**
     * Two enum values that sanitize to one name would otherwise emit duplicate constants.
     *
     * @return void
     */
    public function testConstantNameReuseIsReportedRatherThanEmittedTwice(): void
    {
        $builder = $this->makeBuilder();
        $builder->buildInterface('Link', [
            'type' => 'object',
            'properties' => ['kind' => ['type' => 'string', 'enum' => ['return-policy', 'return_policy']]],
        ], 'Magebit\\AcpSpec\\Api\\Feed', '/spec/schema.feed.json');

        $this->assertCount(1, $builder->getConstantWarnings());
    }

    /**
     * @return void
     */
    public function testEveryPropertyGetsBothAGetterAndASetter(): void
    {
        $file = $this->makeBuilder()->buildInterface('Buyer', [
            'type' => 'object',
            'properties' => ['first_name' => ['type' => 'string']],
        ], 'Magebit\\AcpSpec\\Api\\AgenticCheckout', '/spec/schema.agentic_checkout.json');

        $interface = $file->getClasses()['Magebit\\AcpSpec\\Api\\AgenticCheckout\\BuyerInterface'];

        $this->assertSame(['getFirstName', 'setFirstName'], array_keys($interface->getMethods()));
        $this->assertSame('string|null', (string)$interface->getMethod('getFirstName')->getReturnType());
        $this->assertSame('self', (string)$interface->getMethod('setFirstName')->getReturnType());
    }

    /**
     * @return void
     */
    public function testDedupKeyIgnoresWhetherTheCallerAddedTheInterfaceSuffix(): void
    {
        $builder = $this->makeBuilder();

        $this->assertSame(
            $builder->dedupKey('Magebit\\AcpSpec\\Api\\Cart', 'Cart'),
            $builder->dedupKey('Magebit\\AcpSpec\\Api\\Cart', 'CartInterface')
        );
    }

    /**
     * @return void
     */
    public function testSameNameFromTheSameSourceIsDeduplicated(): void
    {
        $builder = $this->makeBuilder();
        $builder->markGenerated('Magebit\\AcpSpec\\Api\\Cart', 'Cart', '/spec/schema.cart.json');

        $this->assertTrue(
            $builder->isGenerated('Magebit\\AcpSpec\\Api\\Cart', 'CartInterface', '/spec/schema.cart.json')
        );
        $this->assertSame([], $builder->getCollisions());
    }

    /**
     * @return void
     */
    public function testSameNameFromADifferentSourceIsReportedAsACollision(): void
    {
        $builder = $this->makeBuilder();
        $builder->markGenerated('Magebit\\AcpSpec\\Api\\Cart', 'Cart', '/spec/schema.cart.json');

        $this->assertFalse(
            $builder->isGenerated('Magebit\\AcpSpec\\Api\\Cart', 'Cart', '/spec/schema.other.json')
        );
        $this->assertSame(
            ['Magebit\\AcpSpec\\Api\\Cart\\CartInterface' => ['/spec/schema.other.json']],
            $builder->getCollisions()
        );
    }

    /**
     * @return void
     */
    public function testCarriedKeywordsAreEmittedAsOneConstantKeyedByField(): void
    {
        $dir = $this->makeTempDir();
        $builder = $this->makeBuilder($dir);

        $file = $builder->buildInterface('Address', [
            'type' => 'object',
            'properties' => [
                'postalCode' => ['type' => 'string', 'maxLength' => 20],
                'country' => ['type' => 'string', 'pattern' => '^[A-Z]{2}$'],
                'email' => ['type' => 'string', 'format' => 'email'],
            ],
        ], 'Magebit\\AcpSpec\\Api', $dir . '/address.json');

        $this->assertSame(
            [
                'postal_code' => ['maxLength' => 20],
                'country' => ['pattern' => '^[A-Z]{2}$'],
                'email' => ['format' => 'email'],
            ],
            $this->constraintsOf($file)
        );
    }

    /**
     * A schema that constrains nothing must not carry an empty constant, so a consumer can tell
     * "no rules" from "rules the generator could not read".
     *
     * @return void
     */
    public function testNoConstantIsEmittedWhenNothingIsConstrained(): void
    {
        $dir = $this->makeTempDir();
        $builder = $this->makeBuilder($dir);

        $file = $builder->buildInterface('Note', [
            'type' => 'object',
            'properties' => ['text' => ['type' => 'string']],
        ], 'Magebit\\AcpSpec\\Api', $dir . '/note.json');

        $this->assertNull($this->constraintsOf($file));
    }

    /**
     * @return void
     */
    public function testKeywordsAreReadThroughAReference(): void
    {
        $dir = $this->makeTempDir();
        file_put_contents($dir . '/currency.json', json_encode([
            'type' => 'string',
            'pattern' => '^[A-Z]{3}$',
        ]));

        $builder = $this->makeBuilder($dir);
        $file = $builder->buildInterface('Money', [
            'type' => 'object',
            'properties' => ['currency' => ['$ref' => 'currency.json']],
        ], 'Magebit\\AcpSpec\\Api', $dir . '/money.json');

        $this->assertSame(['currency' => ['pattern' => '^[A-Z]{3}$']], $this->constraintsOf($file));
    }

    /**
     * @param PhpFile $file Generated file
     * @return array<string, array<string, scalar>>|null The emitted rules, or null when none were
     */
    private function constraintsOf(PhpFile $file): ?array
    {
        $interface = array_values($file->getNamespaces())[0]->getClasses();
        $constants = array_values($interface)[0]->getConstants();

        return isset($constants['CONSTRAINTS']) ? $constants['CONSTRAINTS']->getValue() : null;
    }

    /**
     * @param string|null $specDir Directory holding schema fixtures
     * @return InterfaceBuilder
     */
    private function makeBuilder(?string $specDir = null): InterfaceBuilder
    {
        $parser = new SchemaParser($specDir ?? sys_get_temp_dir());
        $typeMapper = new TypeMapper($parser);

        return new InterfaceBuilder($parser, $typeMapper, new PhpDocGenerator($parser, $typeMapper));
    }
}
