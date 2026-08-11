<?php
/**
 * @author    Magebit <info@magebit.com>
 * @copyright Copyright (c) Magebit, Ltd. (https://magebit.com)
 * @license   MIT
 */
declare(strict_types=1);

namespace Magebit\AcpSpecGenerator\Test;

use Magebit\AcpSpecGenerator\ManifestWriter;
use PHPUnit\Framework\TestCase;

/**
 * Covers the provenance manifest, which is the only record of where spec/ came from
 */
class ManifestWriterTest extends TestCase
{
    use TempDirectoryTrait;

    /**
     * The OpenAPI documents are not generator inputs, so only a full-tree hash notices them changing.
     *
     * @return void
     */
    public function testEveryVendoredFileIsHashedNotJustGeneratorInputs(): void
    {
        $specDir = $this->makeSpecDir();

        $manifest = (new ManifestWriter($this->makeComposer()))->build(
            $specDir,
            [$specDir . '/json-schema/schema.cart.json']
        );

        $this->assertSame(
            ['json-schema/schema.cart.json', 'openapi/openapi.cart.yaml'],
            array_keys($manifest['spec']['files'])
        );
        $this->assertSame(2, $manifest['spec']['file_count']);
        $this->assertSame(['json-schema/schema.cart.json'], $manifest['spec']['generator_inputs']);
        $this->assertSame(
            'sha256:' . hash('sha256', '{"a":1}'),
            $manifest['spec']['files']['json-schema/schema.cart.json']
        );
    }

    /**
     * @return void
     */
    public function testProvenanceComesFromComposerJson(): void
    {
        $manifest = (new ManifestWriter($this->makeComposer()))->build($this->makeSpecDir(), []);

        $this->assertSame('2026-04-17', $manifest['spec']['target']);
        $this->assertSame('abc123', $manifest['upstream']['commit']);
        $this->assertSame('main', $manifest['upstream']['ref']);
        $this->assertSame('spec/2026-04-17', $manifest['upstream']['path']);
        $this->assertSame('https://example.com/acp', $manifest['upstream']['repository']);
        $this->assertSame('Apache-2.0', $manifest['upstream']['license']);
    }

    /**
     * @return void
     */
    public function testEncodingIsStableRegardlessOfInputOrder(): void
    {
        $specDir = $this->makeSpecDir();
        $writer = new ManifestWriter($this->makeComposer());
        $inputs = [$specDir . '/json-schema/schema.cart.json', $specDir . '/openapi/openapi.cart.yaml'];

        $this->assertSame(
            $writer->encode($writer->build($specDir, $inputs)),
            $writer->encode($writer->build($specDir, array_reverse($inputs)))
        );
    }

    /**
     * @return void
     */
    public function testWritesManifestNextToTheGeneratedTree(): void
    {
        $target = $this->makeTempDir();
        $writer = new ManifestWriter($this->makeComposer());
        $path = $writer->write($target, $writer->build($this->makeSpecDir(), []));

        $this->assertSame($target . '/spec.manifest.json', $path);
        $this->assertSame(
            ManifestWriter::GENERATOR_VERSION,
            json_decode((string)file_get_contents($path), true)['generator']['version']
        );
    }

    /**
     * @return void
     */
    public function testMissingSpecDirectoryIsRejected(): void
    {
        $this->expectException(\RuntimeException::class);

        (new ManifestWriter($this->makeComposer()))->build($this->makeTempDir() . '/absent', []);
    }

    /**
     * @return string Directory laid out like the vendored spec
     */
    private function makeSpecDir(): string
    {
        $dir = $this->makeTempDir();
        mkdir($dir . '/json-schema');
        mkdir($dir . '/openapi');
        file_put_contents($dir . '/json-schema/schema.cart.json', '{"a":1}');
        file_put_contents($dir . '/openapi/openapi.cart.yaml', 'openapi: 3.1.0');

        return $dir;
    }

    /**
     * @return string Path to a composer.json carrying the acp extra block
     */
    private function makeComposer(): string
    {
        $path = $this->makeTempDir() . '/composer.json';
        file_put_contents($path, json_encode([
            'extra' => [
                'acp' => [
                    'spec-target' => '2026-04-17',
                    'upstream' => [
                        'repository' => 'https://example.com/acp',
                        'ref' => 'main',
                        'commit' => 'abc123',
                        'path' => 'spec/2026-04-17',
                    ],
                ],
            ],
        ]));

        return $path;
    }
}
