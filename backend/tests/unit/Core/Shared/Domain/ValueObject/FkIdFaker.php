<?php

namespace backend\tests\unit\Core\AvailableHeroes\Domain\ValueObjects;

use App\Shared\Domain\ValueObjects\FkId;
use backend\tests\unit\Core\Shared\Domain\IntegerFaker;

final class FkIdFaker
{
    public static function create(string $value): FkId
    {
        return new FkId($value);
    }

    public static function random(): FkId
    {
        return new FkId($value ?? IntegerFaker::create());
    }
}