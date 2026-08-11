<?php
/**
 * @author    Magebit <info@magebit.com>
 * @copyright Copyright (c) Magebit, Ltd. (https://magebit.com)
 * @license   MIT
 */
declare(strict_types=1);

namespace Magebit\AcpSpecGenerator\Test;

use Magebit\AcpSpecGenerator\SchemaParser;
use Magebit\AcpSpecGenerator\TypeMapper;
use PHPUnit\Framework\TestCase;

/**
 * Covers the value-versus-interface decision, which has to agree with what the generator emits
 */
class TypeMapperTest extends TestCase
{
    use TempDirectoryTrait;

    /**
     * ACP pins discriminators with const and often omits type, which would otherwise be mixed.
     *
     * @return void
     */
    public function testConstWithoutTypeStillPinsThePhpType(): void
    {
        $mapper = $this->makeMapper();

        $this->assertSame('string', $mapper->mapType(['const' => 'fingerprint'], '/spec/a.json'));
        $this->assertSame('bool', $mapper->mapType(['const' => true], '/spec/a.json'));
        $this->assertSame('array', $mapper->mapType(['const' => ['a', 'b']], '/spec/a.json'));
    }

    /**
     * @return void
     */
    public function testEnumWithoutTypeIsTypedFromItsValues(): void
    {
        $this->assertSame('string', $this->makeMapper()->mapType(['enum' => ['a', 'b']], '/spec/a.json'));
    }

    /**
     * A $def that is only an enum is a value, so it must not be typed as an interface.
     *
     * @return void
     */
    public function testRefToAPureEnumIsAScalar(): void
    {
        $dir = $this->makeTempDir();
        file_put_contents($dir . '/schema.agentic_checkout.json', json_encode([
            '$defs' => ['DiscountErrorCode' => ['type' => 'string', 'enum' => ['expired', 'invalid']]],
        ]));

        $mapper = $this->makeMapper($dir);

        $this->assertSame(
            'string',
            $mapper->mapType(['$ref' => '#/$defs/DiscountErrorCode'], $dir . '/schema.agentic_checkout.json')
        );
    }

    /**
     * @return void
     */
    public function testRefToAFreeFormMapIsAnArray(): void
    {
        $dir = $this->makeTempDir();
        file_put_contents($dir . '/schema.agentic_checkout.json', json_encode([
            '$defs' => ['Metadata' => ['type' => 'object', 'additionalProperties' => ['type' => 'string']]],
        ]));

        $mapper = $this->makeMapper($dir);

        $this->assertSame(
            'array',
            $mapper->mapType(['$ref' => '#/$defs/Metadata'], $dir . '/schema.agentic_checkout.json')
        );
    }

    /**
     * @return void
     */
    public function testRefToAnObjectIsNamespacedByTheBundleItLivesIn(): void
    {
        $dir = $this->makeTempDir();
        file_put_contents($dir . '/schema.agentic_checkout.json', json_encode([
            '$defs' => ['Buyer' => ['type' => 'object', 'properties' => ['email' => ['type' => 'string']]]],
        ]));
        file_put_contents($dir . '/schema.cart.json', '{}');

        $mapper = $this->makeMapper($dir);

        $this->assertSame(
            '\\Magebit\\AcpSpec\\Api\\AgenticCheckout\\BuyerInterface',
            $mapper->mapType(
                ['$ref' => 'schema.agentic_checkout.json#/$defs/Buyer'],
                $dir . '/schema.cart.json'
            )
        );
    }

    /**
     * @return void
     */
    public function testUnionOfObjectRefsKeepsEveryMember(): void
    {
        $dir = $this->makeTempDir();
        file_put_contents($dir . '/schema.agentic_checkout.json', json_encode([
            '$defs' => [
                'MessageInfo' => ['type' => 'object', 'properties' => ['content' => ['type' => 'string']]],
                'MessageError' => ['type' => 'object', 'properties' => ['code' => ['type' => 'string']]],
            ],
        ]));

        $mapper = $this->makeMapper($dir);
        $type = $mapper->mapType(
            ['oneOf' => [['$ref' => '#/$defs/MessageInfo'], ['$ref' => '#/$defs/MessageError']]],
            $dir . '/schema.agentic_checkout.json'
        );

        $this->assertSame(
            '\\Magebit\\AcpSpec\\Api\\AgenticCheckout\\MessageInfoInterface'
            . '|\\Magebit\\AcpSpec\\Api\\AgenticCheckout\\MessageErrorInterface',
            $type
        );
    }

    /**
     * @return void
     */
    public function testInlineObjectIsNamedAfterItsParentAndProperty(): void
    {
        $dir = $this->makeTempDir();
        file_put_contents($dir . '/schema.feed.json', '{}');

        $type = $this->makeMapper($dir)->mapType(
            ['type' => 'object', 'properties' => ['brand' => ['type' => 'string']]],
            $dir . '/schema.feed.json',
            'ProductInterface',
            'unit_price'
        );

        $this->assertSame('\\Magebit\\AcpSpec\\Api\\Feed\\ProductUnitPriceInterface', $type);
    }

    /**
     * @return void
     */
    public function testDefinitionNamesAreSuffixedExactlyOnce(): void
    {
        $mapper = $this->makeMapper();

        $this->assertSame('AppliedDiscountInterface', $mapper->definitionInterfaceName('applied_discount'));
        $this->assertSame('LineItemInterface', $mapper->definitionInterfaceName('LineItem'));
        $this->assertSame('BuyerInterface', $mapper->definitionInterfaceName('BuyerInterface'));
    }

    /**
     * @param string|null $specDir Directory holding schema fixtures
     * @return TypeMapper
     */
    private function makeMapper(?string $specDir = null): TypeMapper
    {
        return new TypeMapper(new SchemaParser($specDir ?? sys_get_temp_dir()));
    }
}
