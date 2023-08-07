<?php

declare(strict_types=1);

namespace backend\tests\unit\Shared\Domain;

final class IntegerFaker
{
    public static function create(): int
    {
        return self::between(1,99);
    }

    public static function between(int $min, $max): int
    {
        return FakerCreator::random()->numberBetween($min, $max);
    }

    public static function lessThan(int $max): int
    {
        return self::between(1, $max);
    }
}