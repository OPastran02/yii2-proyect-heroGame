<?php

namespace backend\tests\unit\Core\Shared\Domain\ValueObject;
use App\Shared\Domain\ValueObjects\Boost;
use backend\tests\unit\Core\Shared\Domain\IntegerFaker;

final class BoostFaker
{
    public static function create(string $value): Boost
    {
        return new Boost($value);
    }

    public static function random(): Boost
    {
        return new Boost($value ?? IntegerFaker::create());
    }
}