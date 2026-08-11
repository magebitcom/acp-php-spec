<?php
/**
 * @author    Magebit <info@magebit.com>
 * @copyright Copyright (c) Magebit, Ltd. (https://magebit.com)
 * @license   MIT
 */
declare(strict_types=1);

namespace Magebit\AcpSpecGenerator\Test;

use Magebit\AcpSpecGenerator\DirectoryComparator;
use Magebit\AcpSpecGenerator\Generator;
use Magebit\AcpSpecGenerator\IntegrityChecker;
use PHPUnit\Framework\TestCase;

/**
 * End-to-end checks on the emitted tree: one bundle per namespace, one mutable interface per type
 */
class GeneratorTest extends TestCase
{
    use TempDirectoryTrait;

    private const API = 'Magebit/AcpSpec/Api';

    /**
     * The bundle namespace is what lets two unrelated Address types coexist without a rename map.
     *
     * @return void
     */
    public function testSameNamedTypesInDifferentBundlesBothSurvive(): void
    {
        $output = $this->generate();

        $this->assertFileExists($output . '/' . self::API . '/AgenticCheckout/AddressInterface.php');
        $this->assertFileExists($output . '/' . self::API . '/DelegatePayment/AddressInterface.php');
    }

    /**
     * @return void
     */
    public function testOnlyOneInterfaceTreeIsEmitted(): void
    {
        $output = $this->generate();

        $this->assertDirectoryExists($output . '/' . self::API);
        $this->assertDirectoryDoesNotExist($output . '/Magebit/AcpSpec/MutableApi');
    }

    /**
     * @return void
     */
    public function testEmittedInterfaceCarriesGettersSettersAndConstants(): void
    {
        $contents = (string)file_get_contents(
            $this->generate() . '/' . self::API . '/AgenticCheckout/MessageErrorInterface.php'
        );

        $this->assertStringContainsString('This file is auto-generated. Do not edit manually.', $contents);
        $this->assertStringContainsString('public function getContent(): string;', $contents);
        $this->assertStringContainsString('public function setContent(string $content): self;', $contents);
        $this->assertStringContainsString("public const TYPE_ERROR = 'error';", $contents);
        $this->assertStringContainsString("public const KEY_CONTENT = 'content';", $contents);
    }

    /**
     * A value-shaped $def must not get an interface, or nothing would ever reference it.
     *
     * @return void
     */
    public function testPureEnumDefinitionDoesNotBecomeAnInterface(): void
    {
        $this->assertFileDoesNotExist(
            $this->generate() . '/' . self::API . '/AgenticCheckout/DiscountErrorCodeInterface.php'
        );
    }

    /**
     * @return void
     */
    public function testInlineObjectGetsItsOwnInterface(): void
    {
        $this->assertFileExists(
            $this->generate() . '/' . self::API . '/AgenticCheckout/CheckoutSessionDiscountsInterface.php'
        );
    }

    /**
     * @return void
     */
    public function testGeneratedTreeHasNoDanglingReferences(): void
    {
        $this->assertSame([], (new IntegrityChecker())->findDanglingReferences($this->generate()));
    }

    /**
     * @return void
     */
    public function testIntegrityCheckFailsWhenAGeneratedTypeIsRemoved(): void
    {
        $output = $this->generate();
        unlink($output . '/' . self::API . '/AgenticCheckout/TotalInterface.php');

        $this->assertArrayHasKey(
            'Magebit\\AcpSpec\\Api\\AgenticCheckout\\TotalInterface',
            (new IntegrityChecker())->findDanglingReferences($output)
        );
    }

    /**
     * @return void
     */
    public function testTwoRunsProduceByteIdenticalOutput(): void
    {
        $spec = $this->writeFixtureSpec();

        $this->assertSame([], (new DirectoryComparator())->compare(
            $this->generate($spec),
            $this->generate($spec)
        ));
    }

    /**
     * @return void
     */
    public function testRunRecordsNoErrorsOrWarnings(): void
    {
        $generator = new Generator($this->writeFixtureSpec(), $this->makeTempDir());

        ob_start();
        $generator->generate();
        ob_end_clean();

        $this->assertSame([], $generator->getErrors());
        $this->assertSame([], $generator->getCollisions());
        $this->assertSame([], $generator->getConstantWarnings());
    }

    /**
     * @return void
     */
    public function testMissingSpecDirectoryIsRejected(): void
    {
        $this->expectException(\RuntimeException::class);

        (new Generator($this->makeTempDir() . '/absent', $this->makeTempDir()))->generate();
    }

    /**
     * @param string|null $specDir Existing fixture spec directory, or null to create one
     * @return string Output directory
     */
    private function generate(?string $specDir = null): string
    {
        $output = $this->makeTempDir();

        ob_start();
        (new Generator($specDir ?? $this->writeFixtureSpec(), $output))->generate();
        ob_end_clean();

        return $output;
    }

    /**
     * Write bundles reproducing the shapes that matter: a name shared across bundles, a cross-bundle
     * allOf, a discriminator const, a pure-enum value type and an inline object.
     *
     * @return string Spec directory
     */
    private function writeFixtureSpec(): string
    {
        $dir = $this->makeTempDir();

        $this->writeJson($dir . '/schema.agentic_checkout.json', [
            'title' => 'Agentic Checkout',
            '$defs' => [
                'Address' => [
                    'type' => 'object',
                    'properties' => ['line_one' => ['type' => 'string'], 'country' => ['type' => 'string']],
                    'required' => ['line_one'],
                ],
                'DiscountErrorCode' => ['type' => 'string', 'enum' => ['expired', 'invalid']],
                'Total' => [
                    'type' => 'object',
                    'properties' => ['amount' => ['type' => 'integer']],
                    'required' => ['amount'],
                ],
                'MessageError' => [
                    'type' => 'object',
                    'properties' => [
                        'type' => ['type' => 'string', 'const' => 'error'],
                        'code' => ['$ref' => '#/$defs/DiscountErrorCode'],
                        'content' => ['type' => 'string'],
                    ],
                    'required' => ['type', 'content'],
                ],
                'CheckoutSession' => [
                    'type' => 'object',
                    'properties' => [
                        'totals' => ['type' => 'array', 'items' => ['$ref' => '#/$defs/Total']],
                        'messages' => ['type' => 'array', 'items' => ['$ref' => '#/$defs/MessageError']],
                        'discounts' => [
                            'type' => 'object',
                            'properties' => ['codes' => ['type' => 'array', 'items' => ['type' => 'string']]],
                        ],
                    ],
                    'required' => ['totals'],
                ],
            ],
        ]);

        $this->writeJson($dir . '/schema.delegate_payment.json', [
            'title' => 'Delegate Payment',
            '$defs' => [
                'Address' => [
                    'type' => 'object',
                    'properties' => ['postal_code' => ['type' => 'string']],
                ],
            ],
        ]);

        $this->writeJson($dir . '/schema.discount.json', [
            'title' => 'Discount',
            '$defs' => [
                'checkout_with_discount' => [
                    'allOf' => [
                        ['$ref' => 'schema.agentic_checkout.json#/$defs/CheckoutSession'],
                        ['type' => 'object', 'properties' => ['coupon' => ['type' => 'string']]],
                    ],
                ],
            ],
        ]);

        return $dir;
    }

    /**
     * @param string $path Destination path
     * @param array $data Schema data
     * @return void
     */
    private function writeJson(string $path, array $data): void
    {
        file_put_contents($path, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
    }
}
