<?php

namespace backend\tests\unit\Core\Shared\Domain\ValueObject;
use api\Shared\Domain\ValueObject\Boost;
use backend\tests\unit\Shared\Domain\IntegerFaker;

final class BoostFaker
{
    public static function create(string $value): Boost
    {
        return new Boost($value);
    }

    public static function random(): Boost
    {
        $randomValue = mt_rand(0, 50);
        return new Boost($randomValue);
    }
}