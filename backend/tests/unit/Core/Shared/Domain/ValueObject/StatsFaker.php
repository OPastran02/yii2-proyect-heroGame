<?php

namespace backend\tests\unit\Core\AvailableHeroes\Domain\ValueObjects;

use App\Shared\Domain\ValueObjects\Stats;
use backend\tests\unit\Core\Shared\Domain\IntegerFaker;

final class StatsFaker
{
    public static function create(string $value): Stats
    {
        return new Stats($value);
    }

    public static function random(): Stats
    {
        return new Stats($value ?? IntegerFaker::create());
    }
}