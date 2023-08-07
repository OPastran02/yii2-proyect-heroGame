<?php

namespace backend\tests\unit\Core\Shared\Domain\ValueObject;

use api\Shared\Domain\ValueObject\Stats;
use backend\tests\unit\Shared\Domain\IntegerFaker;

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