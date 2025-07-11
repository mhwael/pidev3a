<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Generator;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\Migrations\Configuration\Configuration;
use Doctrine\Migrations\Metadata\Storage\TableMetadataStorageConfiguration;
use Doctrine\SqlFormatter\NullHighlighter;
use Doctrine\SqlFormatter\SqlFormatter;

use function array_unshift;
use function count;
use function get_class;
use function implode;
use function preg_replace;
use function sprintf;
use function str_repeat;
use function stripos;
use function strlen;
use function var_export;

/**
 * The SqlGenerator class is responsible for generating the body of the up() and down() methods for a migration
 * from an array of SQL queries.
 *
 * @internal
 */
class SqlGenerator
{
    private SqlFormatter|null $formatter = null;

    public function __construct(
        private readonly Configuration $configuration,
        private readonly AbstractPlatform $platform,
    ) {
    }

    /** @param string[] $sql */
    public function generate(
        array $sql,
        bool $formatted = false,
        bool|null $nowdocOutput = null,
        int $lineLength = 120,
        bool $checkDbPlatform = true,
    ): string {
        $code = [];

        $storageConfiguration = $this->configuration->getMetadataStorageConfiguration();
        $maxLength            = $lineLength - 18 - 8; // max - php code length - indentation
        foreach ($sql as $query) {
            if (
                $storageConfiguration instanceof TableMetadataStorageConfiguration
                && stripos($query, $storageConfiguration->getTableName()) !== false
            ) {
                continue;
            }

            if ($formatted && strlen($query) > $maxLength) {
                $query = $this->formatQuery($query);
            }

            if ($nowdocOutput === true || ($nowdocOutput !== false && $formatted && strlen($query) > $maxLength )) {
                $code[] = sprintf(
                    "\$this->addSql(<<<'SQL'\n%s\nSQL);",
                    preg_replace('/^/m', str_repeat(' ', 4), $query),
                );
            } else {
                $code[] = sprintf('$this->addSql(%s);', var_export($query, true));
            }
        }

        if (count($code) !== 0 && $checkDbPlatform && $this->configuration->isDatabasePlatformChecked()) {
            $currentPlatform = '\\' . get_class($this->platform);

            array_unshift(
                $code,
                sprintf(
                    <<<'PHP'
$this->abortIf(
    !$this->connection->getDatabasePlatform() instanceof %s,
    "Migration can only be executed safely on '%s'."
);
PHP
                    ,
                    $currentPlatform,
                    $currentPlatform,
                ),
                '',
            );
        }

        return implode("\n", $code);
    }

    private function formatQuery(string $query): string
    {
        $this->formatter ??= new SqlFormatter(new NullHighlighter());

        return $this->formatter->format($query);
    }
}
