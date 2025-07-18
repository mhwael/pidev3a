<?php

declare(strict_types=1);

namespace Doctrine\ORM\Mapping;

use BackedEnum;
use BcMath\Number;
use DateInterval;
use DateTime;
use DateTimeImmutable;
use Doctrine\DBAL\Types\Type;
use Doctrine\DBAL\Types\Types;
use ReflectionEnum;
use ReflectionNamedType;
use ReflectionProperty;

use function array_merge;
use function assert;
use function defined;
use function enum_exists;
use function is_a;

/** @phpstan-type ScalarName = 'array'|'bool'|'float'|'int'|'string' */
final class DefaultTypedFieldMapper implements TypedFieldMapper
{
    /** @var array<class-string|ScalarName, class-string<Type>|string> $typedFieldMappings */
    private array $typedFieldMappings;

    private const DEFAULT_TYPED_FIELD_MAPPINGS = [
        DateInterval::class => Types::DATEINTERVAL,
        DateTime::class => Types::DATETIME_MUTABLE,
        DateTimeImmutable::class => Types::DATETIME_IMMUTABLE,
        'array' => Types::JSON,
        'bool' => Types::BOOLEAN,
        'float' => Types::FLOAT,
        'int' => Types::INTEGER,
        'string' => Types::STRING,
    ];

    /** @param array<class-string|ScalarName, class-string<Type>|string> $typedFieldMappings */
    public function __construct(array $typedFieldMappings = [])
    {
        $defaultMappings = self::DEFAULT_TYPED_FIELD_MAPPINGS;
        if (defined(Types::class . '::NUMBER')) { // DBAL 4.3+
            $defaultMappings[Number::class] = Types::NUMBER;
        }

        $this->typedFieldMappings = array_merge($defaultMappings, $typedFieldMappings);
    }

    /**
     * {@inheritDoc}
     */
    public function validateAndComplete(array $mapping, ReflectionProperty $field): array
    {
        $type = $field->getType();

        if (! $type instanceof ReflectionNamedType) {
            return $mapping;
        }

        if (
            ! $type->isBuiltin()
            && enum_exists($type->getName())
            && (! isset($mapping['type']) || (
                defined('Doctrine\DBAL\Types\Types::ENUM')
                && $mapping['type'] === Types::ENUM
            ))
        ) {
            $reflection = new ReflectionEnum($type->getName());
            if (! $reflection->isBacked()) {
                throw MappingException::backedEnumTypeRequired(
                    $field->class,
                    $mapping['fieldName'],
                    $type->getName(),
                );
            }

            assert(is_a($type->getName(), BackedEnum::class, true));
            $mapping['enumType'] = $type->getName();
            $type                = $reflection->getBackingType();
        }

        if (isset($mapping['type'])) {
            return $mapping;
        }

        if (isset($this->typedFieldMappings[$type->getName()])) {
            $mapping['type'] = $this->typedFieldMappings[$type->getName()];
        }

        return $mapping;
    }
}
