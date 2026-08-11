<?php
/**
 * @author    Magebit <info@magebit.com>
 * @copyright Copyright (c) Magebit, Ltd. (https://magebit.com)
 * @license   MIT
 */
declare(strict_types=1);

namespace Magebit\AcpSpecGenerator\Test;

use Magebit\AcpSpecGenerator\PhpDocGenerator;
use Magebit\AcpSpecGenerator\SchemaParser;
use Magebit\AcpSpecGenerator\TypeMapper;
use Nette\PhpGenerator\PhpNamespace;
use PHPUnit\Framework\TestCase;

/**
 * Covers the array and map annotations, where a union item type is easy to render wrongly
 */
class PhpDocGeneratorTest extends TestCase
{
    use TempDirectoryTrait;

    /**
     * @return void
     */
    public function testArrayOfObjectsUsesTheItemInterface(): void
    {
        $dir = $this->makeTempDir();
        file_put_contents($dir . '/schema.agentic_checkout.json', json_encode([
            '$defs' => ['Total' => ['type' => 'object', 'properties' => ['amount' => ['type' => 'integer']]]],
        ]));

        $this->assertSame(
            '\\Magebit\\AcpSpec\\Api\\AgenticCheckout\\TotalInterface[]',
            $this->describe(
                ['type' => 'array', 'items' => ['$ref' => '#/$defs/Total']],
                'array',
                false,
                $dir . '/schema.agentic_checkout.json',
                $dir
            )
        );
    }

    /**
     * "A|B[]" parses as "A or B[]", so a union item type has to be wrapped in array<>.
     *
     * @return void
     */
    public function testUnionItemTypeIsWrappedRatherThanSuffixed(): void
    {
        $dir = $this->makeTempDir();
        file_put_contents($dir . '/schema.agentic_checkout.json', json_encode([
            '$defs' => [
                'MessageInfo' => ['type' => 'object', 'properties' => ['content' => ['type' => 'string']]],
                'MessageError' => ['type' => 'object', 'properties' => ['code' => ['type' => 'string']]],
            ],
        ]));

        $docType = $this->describe(
            [
                'type' => 'array',
                'items' => ['oneOf' => [['$ref' => '#/$defs/MessageInfo'], ['$ref' => '#/$defs/MessageError']]],
            ],
            'array',
            false,
            $dir . '/schema.agentic_checkout.json',
            $dir
        );

        $this->assertSame(
            'array<\\Magebit\\AcpSpec\\Api\\AgenticCheckout\\MessageInfoInterface'
            . '|\\Magebit\\AcpSpec\\Api\\AgenticCheckout\\MessageErrorInterface>',
            $docType
        );
    }

    /**
     * @return void
     */
    public function testFreeFormMapDocumentsItsValueType(): void
    {
        $this->assertSame(
            'array<string, string|float|bool>',
            $this->describe(
                [
                    'type' => 'object',
                    'additionalProperties' => [
                        'oneOf' => [['type' => 'string'], ['type' => 'number'], ['type' => 'boolean']],
                    ],
                ],
                'array',
                false,
                '/spec/schema.agentic_checkout.json'
            )
        );
    }

    /**
     * @return void
     */
    public function testArrayWithoutItemsFallsBackToMixed(): void
    {
        $this->assertSame(
            'array<mixed>|null',
            $this->describe(['type' => 'array'], 'array', true, '/spec/schema.feed.json')
        );
    }

    /**
     * @return void
     */
    public function testScalarPassesThroughAndPicksUpNull(): void
    {
        $this->assertSame(
            'string|null',
            $this->describe(['type' => 'string'], 'string', true, '/spec/schema.feed.json')
        );
    }

    /**
     * @return void
     */
    public function testUseStatementIsAddedOnlyForForeignNamespaces(): void
    {
        $namespace = new PhpNamespace('Magebit\\AcpSpec\\Api\\Cart');
        $generator = $this->makeGenerator(sys_get_temp_dir());

        $generator->addUseStatementsForType('\\Magebit\\AcpSpec\\Api\\AgenticCheckout\\BuyerInterface', $namespace);
        $generator->addUseStatementsForType('\\Magebit\\AcpSpec\\Api\\Cart\\CartInterface', $namespace);
        $generator->addUseStatementsForType('string|null', $namespace);

        $this->assertSame(
            ['BuyerInterface' => 'Magebit\\AcpSpec\\Api\\AgenticCheckout\\BuyerInterface'],
            $namespace->getUses()
        );
    }

    /**
     * @param array $property Property schema definition
     * @param string $baseType PHP type without any null member
     * @param bool $nullable Whether the property is optional
     * @param string $currentFile File the property is declared in
     * @param string|null $specDir Directory holding schema fixtures
     * @return string
     */
    private function describe(
        array $property,
        string $baseType,
        bool $nullable,
        string $currentFile,
        ?string $specDir = null
    ): string {
        return $this->makeGenerator($specDir ?? sys_get_temp_dir())->generatePhpDocType(
            $property,
            $baseType,
            $nullable,
            $currentFile,
            new PhpNamespace('Magebit\\AcpSpec\\Api\\Cart')
        );
    }

    /**
     * @param string $specDir Directory holding schema fixtures
     * @return PhpDocGenerator
     */
    private function makeGenerator(string $specDir): PhpDocGenerator
    {
        $parser = new SchemaParser($specDir);

        return new PhpDocGenerator($parser, new TypeMapper($parser));
    }
}
