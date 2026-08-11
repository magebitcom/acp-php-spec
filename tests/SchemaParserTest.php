<?php
/**
 * @author    Magebit <info@magebit.com>
 * @copyright Copyright (c) Magebit, Ltd. (https://magebit.com)
 * @license   MIT
 */
declare(strict_types=1);

namespace Magebit\AcpSpecGenerator\Test;

use Magebit\AcpSpecGenerator\SchemaParser;
use PHPUnit\Framework\TestCase;

/**
 * Covers the bundle naming scheme that keeps same-named types apart, plus $ref resolution
 */
class SchemaParserTest extends TestCase
{
    use TempDirectoryTrait;

    /**
     * The bundle namespace is the only thing separating the several unrelated Address types.
     *
     * @return void
     */
    public function testNamespaceComesFromTheBundleFilename(): void
    {
        $parser = new SchemaParser('/spec');

        $this->assertSame(
            'Magebit\\AcpSpec\\Api\\AgenticCheckout',
            $parser->getNamespaceFromPath('/spec/json-schema/schema.agentic_checkout.json')
        );
        $this->assertSame(
            'Magebit\\AcpSpec\\Api\\DelegatePayment',
            $parser->getNamespaceFromPath('/spec/json-schema/schema.delegate_payment.json')
        );
    }

    /**
     * @return void
     */
    public function testBundleNameFallsBackToTheWholeBasename(): void
    {
        $this->assertSame('Cart', (new SchemaParser('/spec'))->getBundleName('/spec/cart.json'));
    }

    /**
     * @return void
     */
    public function testSchemaFilesAreReturnedInSortedOrder(): void
    {
        $dir = $this->makeTempDir();
        mkdir($dir . '/json-schema');

        foreach (['json-schema/schema.zeta.json', 'json-schema/schema.alpha.json', 'notes.txt'] as $name) {
            file_put_contents($dir . '/' . $name, '{}');
        }

        $files = (new SchemaParser($dir))->findSchemaFiles($dir);
        $relative = array_map(static fn (string $f): string => substr($f, strlen($dir) + 1), $files);

        $this->assertSame(['json-schema/schema.alpha.json', 'json-schema/schema.zeta.json'], $relative);
    }

    /**
     * @return void
     */
    public function testCrossBundleRefResolvesIntoTheOtherBundlesFile(): void
    {
        $dir = $this->makeTempDir();
        file_put_contents($dir . '/schema.agentic_checkout.json', json_encode([
            '$defs' => ['Buyer' => ['type' => 'object', 'properties' => ['email' => ['type' => 'string']]]],
        ]));
        file_put_contents($dir . '/schema.cart.json', '{}');

        $parser = new SchemaParser($dir);
        $target = $parser->resolveRefTarget(
            'schema.agentic_checkout.json#/$defs/Buyer',
            $dir . '/schema.cart.json'
        );

        $this->assertSame(['email'], array_keys($target['schema']['properties']));
        $this->assertSame(realpath($dir . '/schema.agentic_checkout.json'), $target['file']);
    }

    /**
     * rebaseRefs() rewrites merged-in references to absolute paths, so they have to resolve.
     *
     * @return void
     */
    public function testAbsolutePathRefResolves(): void
    {
        $dir = $this->makeTempDir();
        file_put_contents($dir . '/schema.agentic_checkout.json', json_encode([
            '$defs' => ['Total' => ['type' => 'object', 'properties' => ['amount' => ['type' => 'integer']]]],
        ]));

        $parser = new SchemaParser($dir);
        $target = $parser->resolveRefTarget(
            $dir . '/schema.agentic_checkout.json#/$defs/Total',
            $dir . '/schema.discount.json'
        );

        $this->assertSame(['amount'], array_keys($target['schema']['properties']));
    }

    /**
     * @return void
     */
    public function testBareRefDefinitionIsRecognisedAsAnAlias(): void
    {
        $parser = new SchemaParser($this->makeTempDir());

        $this->assertTrue($parser->isRefAlias(['$ref' => '#/$defs/Item']));
        $this->assertTrue($parser->isRefAlias(['$ref' => '#/$defs/Item', 'description' => 'aliased']));
        $this->assertFalse($parser->isRefAlias(['$ref' => '#/$defs/Item', 'type' => 'object']));
        $this->assertFalse($parser->isRefAlias(['allOf' => [['$ref' => '#/$defs/Item']]]));
        $this->assertFalse($parser->isRefAlias(['type' => 'string']));
    }

    /**
     * @return void
     */
    public function testResolveRefTargetRejectsACircularAlias(): void
    {
        $dir = $this->makeTempDir();
        file_put_contents($dir . '/loop.json', json_encode([
            '$defs' => ['a' => ['$ref' => '#/$defs/b'], 'b' => ['$ref' => '#/$defs/a']],
        ]));

        $this->expectException(\RuntimeException::class);

        (new SchemaParser($dir))->resolveRefTarget('#/$defs/a', $dir . '/loop.json');
    }

    /**
     * ACP bundles have no root object today; one appearing upstream must not be silently dropped.
     *
     * @return void
     */
    public function testBundleWithoutRootObjectIsReported(): void
    {
        $dir = $this->makeTempDir();
        file_put_contents($dir . '/bundle.json', json_encode(['$defs' => ['A' => ['type' => 'object']]]));
        file_put_contents($dir . '/rooted.json', json_encode(['type' => 'object', 'properties' => []]));

        $parser = new SchemaParser($dir);

        $this->assertFalse($parser->hasRootObject($dir . '/bundle.json'));
        $this->assertTrue($parser->hasRootObject($dir . '/rooted.json'));
    }
}
