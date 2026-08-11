<?php
/**
 * @author    Magebit <info@magebit.com>
 * @copyright Copyright (c) Magebit, Ltd. (https://magebit.com)
 * @license   MIT
 */
declare(strict_types=1);

namespace Magebit\AcpSpecGenerator;

/**
 * Writes spec.manifest.json recording the provenance of the vendored spec snapshot
 */
class ManifestWriter
{
    public const GENERATOR_VERSION = '1.0.0';
    public const MANIFEST_FILENAME = 'spec.manifest.json';

    private string $composerPath;

    /**
     * @param string|null $composerPath composer.json to read the spec target and provenance from
     */
    public function __construct(?string $composerPath = null)
    {
        $this->composerPath = $composerPath ?? dirname(__DIR__) . '/composer.json';
    }

    /**
     * Hashes the whole vendored tree, not just the generator's inputs, so a change to the OpenAPI
     * documents is caught too.
     *
     * @param string $specDir Directory holding the vendored spec
     * @param string[] $inputFiles Absolute paths of the files the generator consumed
     * @return array The manifest as a nested array
     * @throws \RuntimeException If a file cannot be hashed or composer.json cannot be read
     */
    public function build(string $specDir, array $inputFiles): array
    {
        $specDir = rtrim($specDir, '/');
        $extra = $this->readExtra();
        $files = [];

        foreach ($this->findFiles($specDir) as $file) {
            $hash = hash_file('sha256', $file);

            if ($hash === false) {
                throw new \RuntimeException("Cannot hash spec file: {$file}");
            }

            $files[$this->relative($file, $specDir)] = 'sha256:' . $hash;
        }

        ksort($files, SORT_STRING);

        $inputs = array_map(fn (string $file): string => $this->relative($file, $specDir), $inputFiles);
        sort($inputs, SORT_STRING);

        return [
            'generator' => [
                'name' => 'magebitcom/acp-php-spec',
                'version' => self::GENERATOR_VERSION,
            ],
            'upstream' => [
                'repository' => $extra['upstream']['repository'] ?? null,
                'ref' => $extra['upstream']['ref'] ?? null,
                'commit' => $extra['upstream']['commit'] ?? null,
                'path' => $extra['upstream']['path'] ?? null,
                'license' => 'Apache-2.0',
            ],
            'spec' => [
                'target' => $extra['spec-target'] ?? null,
                'directory' => 'spec',
                'file_count' => count($files),
                'generator_inputs' => $inputs,
                'files' => $files,
            ],
        ];
    }

    /**
     * @param array $manifest Manifest payload
     * @return string JSON document with stable key order and a trailing newline
     * @throws \RuntimeException If encoding fails
     */
    public function encode(array $manifest): string
    {
        $json = json_encode($manifest, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

        if ($json === false) {
            throw new \RuntimeException('Cannot encode manifest: ' . json_last_error_msg());
        }

        return $json . "\n";
    }

    /**
     * @param string $targetDir Directory to write spec.manifest.json into
     * @param array $manifest Manifest payload
     * @return string Path of the written file
     * @throws \RuntimeException If the file cannot be written
     */
    public function write(string $targetDir, array $manifest): string
    {
        $path = rtrim($targetDir, '/') . '/' . self::MANIFEST_FILENAME;

        if (file_put_contents($path, $this->encode($manifest)) === false) {
            throw new \RuntimeException("Cannot write manifest: {$path}");
        }

        return $path;
    }

    /**
     * composer.json is the single source of truth for the spec target and where spec/ came from.
     *
     * @return array
     * @throws \RuntimeException If composer.json cannot be read or decoded
     */
    private function readExtra(): array
    {
        $raw = file_get_contents($this->composerPath);

        if ($raw === false) {
            throw new \RuntimeException("Cannot read {$this->composerPath}");
        }

        $composer = json_decode($raw, true);

        if (!is_array($composer)) {
            throw new \RuntimeException("Cannot decode {$this->composerPath}");
        }

        return $composer['extra']['acp'] ?? [];
    }

    /**
     * @param string $file Absolute file path
     * @param string $root Directory the path is relative to
     * @return string
     */
    private function relative(string $file, string $root): string
    {
        return ltrim(substr($file, strlen($root)), '/');
    }

    /**
     * @param string $directory Directory to scan
     * @return string[] Absolute file paths, sorted
     */
    private function findFiles(string $directory): array
    {
        if (!is_dir($directory)) {
            throw new \RuntimeException("Spec directory not found: {$directory}");
        }

        $files = [];
        $iterator = new \RecursiveIteratorIterator(
            new \RecursiveDirectoryIterator($directory, \RecursiveDirectoryIterator::SKIP_DOTS)
        );

        foreach ($iterator as $file) {
            if ($file->isFile()) {
                $files[] = (string)realpath($file->getPathname());
            }
        }

        sort($files, SORT_STRING);

        return $files;
    }
}
