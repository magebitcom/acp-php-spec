<?php
/**
 * @author    Magebit <info@magebit.com>
 * @copyright Copyright (c) Magebit, Ltd. (https://magebit.com)
 * @license   MIT
 */
declare(strict_types=1);

namespace Magebit\AcpSpecGenerator;

/**
 * Parses JSON Schema files and resolves $ref references
 */
class SchemaParser
{
    public const ROOT_NAMESPACE = 'Magebit\\AcpSpec';
    public const API_NAMESPACE = self::ROOT_NAMESPACE . '\\Api';

    private array $loadedSchemas = [];
    private string $baseDir;

    /**
     * @param string $baseDir Base directory for schema files
     */
    public function __construct(string $baseDir)
    {
        $this->baseDir = rtrim($baseDir, '/');
    }

    /**
     * @param string $filePath Path to the schema file
     * @return array The loaded schema
     * @throws \RuntimeException If the file is missing or not valid JSON
     */
    public function loadSchema(string $filePath): array
    {
        $absolutePath = $this->resolveFilePath($filePath);

        if (isset($this->loadedSchemas[$absolutePath])) {
            return $this->loadedSchemas[$absolutePath];
        }

        if (!file_exists($absolutePath)) {
            throw new \RuntimeException("Schema file not found: {$absolutePath}");
        }

        $schema = json_decode((string)file_get_contents($absolutePath), true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new \RuntimeException("Invalid JSON in {$absolutePath}: " . json_last_error_msg());
        }

        if (!is_array($schema)) {
            throw new \RuntimeException("Schema is not an object: {$absolutePath}");
        }

        $this->loadedSchemas[$absolutePath] = $schema;

        return $schema;
    }

    /**
     * @param string $ref Reference string, e.g. "#/$defs/Item" or "schema.cart.json#/$defs/Cart"
     * @param string $currentFile File the reference appears in
     * @return array The resolved schema fragment
     * @throws \RuntimeException If the reference cannot be resolved
     */
    public function resolveRef(string $ref, string $currentFile): array
    {
        if (strpos($ref, '#') === 0) {
            return $this->resolveJsonPointer($ref, $currentFile);
        }

        $pointer = explode('#', $ref, 2)[1] ?? '';

        return $this->resolveJsonPointer('#' . $pointer, $this->resolveRefFile($ref, $currentFile));
    }

    /**
     * Follow a $ref, including chained bare-$ref aliases, to the schema it ultimately points at.
     *
     * @param string $ref Reference string
     * @param string $currentFile File the reference appears in
     * @return array{schema: array, file: string} Resolved schema and the file that owns it
     * @throws \RuntimeException If the reference cannot be resolved or loops
     */
    public function resolveRefTarget(string $ref, string $currentFile): array
    {
        $seen = [];

        while (true) {
            $key = $currentFile . '|' . $ref;

            if (isset($seen[$key])) {
                throw new \RuntimeException("Circular reference: {$ref} in {$currentFile}");
            }

            $seen[$key] = true;
            $schema = $this->resolveRef($ref, $currentFile);
            $currentFile = $this->resolveRefFile($ref, $currentFile);

            if (!$this->isRefAlias($schema)) {
                return ['schema' => $schema, 'file' => $currentFile];
            }

            $ref = $schema['$ref'];
        }
    }

    /**
     * A schema that is nothing but a $ref (plus annotations) is an alias for its target.
     *
     * @param array $schema Schema fragment
     * @return bool
     */
    public function isRefAlias(array $schema): bool
    {
        if (!isset($schema['$ref'])) {
            return false;
        }

        return !isset($schema['properties'])
            && !isset($schema['allOf'])
            && !isset($schema['oneOf'])
            && !isset($schema['anyOf'])
            && !isset($schema['type']);
    }

    /**
     * @param string $filePath Path to the schema file
     * @return array Definitions from $defs or definitions
     */
    public function getDefinitions(string $filePath): array
    {
        $schema = $this->loadSchema($filePath);

        return $schema['$defs'] ?? $schema['definitions'] ?? [];
    }

    /**
     * ACP bundles carry no root object today, but an upstream change that adds one must not be dropped.
     *
     * @param string $filePath Path to the schema file
     * @return bool
     */
    public function hasRootObject(string $filePath): bool
    {
        $schema = $this->loadSchema($filePath);

        if (($schema['type'] ?? null) === 'object') {
            return true;
        }

        return isset($schema['oneOf']) || isset($schema['anyOf']) || isset($schema['allOf']);
    }

    /**
     * @param string $filePath Path to the schema file
     * @return array
     */
    public function getRootSchema(string $filePath): array
    {
        return $this->loadSchema($filePath);
    }

    /**
     * @param string $directory Directory to search
     * @return string[] Absolute file paths, sorted for reproducible output
     */
    public function findSchemaFiles(string $directory): array
    {
        $files = [];
        $iterator = new \RecursiveIteratorIterator(
            new \RecursiveDirectoryIterator($directory, \RecursiveDirectoryIterator::SKIP_DOTS)
        );

        foreach ($iterator as $file) {
            // Normalised here so paths from iteration and from $ref resolution compare equal.
            if ($file->isFile() && $file->getExtension() === 'json') {
                $files[] = (string)realpath($file->getPathname());
            }
        }

        sort($files, SORT_STRING);

        return $files;
    }

    /**
     * Each ACP file is a self-contained bundle, and the bundle name is what separates the several
     * unrelated `Address`, `Error` and `Link` types the spec defines.
     *
     * @param string $filePath Path to the schema file
     * @return string Bundle name in PascalCase, e.g. "AgenticCheckout"
     */
    public function getBundleName(string $filePath): string
    {
        $base = basename($filePath, '.json');
        $base = preg_replace('/^schema\./', '', $base) ?? $base;

        return $this->toPascalCase($base);
    }

    /**
     * @param string $filePath Path to the schema file
     * @return string Fully qualified namespace, e.g. "Magebit\AcpSpec\Api\AgenticCheckout"
     */
    public function getNamespaceFromPath(string $filePath): string
    {
        return self::API_NAMESPACE . '\\' . $this->getBundleName($filePath);
    }

    /**
     * @param array $schema The schema array
     * @param string $filePath Path to the schema file
     * @return string
     */
    public function getInterfaceName(array $schema, string $filePath): string
    {
        if (isset($schema['title'])) {
            return $this->toPascalCase((string)$schema['title']);
        }

        return $this->getBundleName($filePath);
    }

    /**
     * @param string $name Raw name
     * @return string
     */
    public function toPascalCase(string $name): string
    {
        $name = (string)preg_replace('/[^A-Za-z0-9]+/', ' ', $name);

        return str_replace(' ', '', ucwords($name));
    }

    /**
     * @param string $filePath Relative or absolute file path
     * @return string
     */
    private function resolveFilePath(string $filePath): string
    {
        if (strpos($filePath, '/') === 0) {
            return $filePath;
        }

        return $this->baseDir . '/' . $filePath;
    }

    /**
     * @param string $pointer JSON pointer, e.g. "#/$defs/Item"
     * @param string $filePath File containing the schema
     * @return array
     * @throws \RuntimeException If the pointer cannot be resolved
     */
    private function resolveJsonPointer(string $pointer, string $filePath): array
    {
        $schema = $this->loadSchema($filePath);

        if ($pointer === '#' || $pointer === '') {
            return $schema;
        }

        $current = $schema;

        foreach (explode('/', ltrim($pointer, '#/')) as $part) {
            $part = str_replace(['~1', '~0'], ['/', '~'], $part);

            if (!is_array($current) || !isset($current[$part])) {
                throw new \RuntimeException("Cannot resolve pointer {$pointer} in {$filePath}");
            }

            $current = $current[$part];
        }

        if (!is_array($current)) {
            throw new \RuntimeException("Pointer {$pointer} in {$filePath} does not resolve to a schema");
        }

        return $current;
    }

    /**
     * @param string $ref Reference string
     * @param string $currentFile File the reference appears in
     * @return string Absolute path of the target file
     * @throws \RuntimeException If the target file cannot be located
     */
    private function resolveRefFile(string $ref, string $currentFile): string
    {
        if (strpos($ref, '#') === 0) {
            return $currentFile;
        }

        [$filePath] = explode('#', $ref, 2);
        $targetFile = realpath(
            strpos($filePath, '/') === 0 ? $filePath : dirname($currentFile) . '/' . $filePath
        );

        if ($targetFile === false) {
            throw new \RuntimeException("Cannot resolve reference: {$ref} from {$currentFile}");
        }

        return $targetFile;
    }
}
