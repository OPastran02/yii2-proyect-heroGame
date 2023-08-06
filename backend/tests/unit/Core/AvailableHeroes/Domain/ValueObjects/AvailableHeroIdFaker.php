<?php

namespace backend\tests\unit\Core\AvailableHeroes\Domain\ValueObjects;

use App\Core\AvailableHeroes\Domain\ValueObjects\AvailableHeroId;
use backend\tests\unit\Core\Shared\Domain\IntegerFaker;

final class AvailableHeroIdFaker
{
    public static function create(string $value): AvailableHeroId
    {
        return new AvailableHeroId($value);
    }

    public static function random(): AvailableHeroId
    {
        return new AvailableHeroId($value ?? IntegerFaker::create());
    }
}