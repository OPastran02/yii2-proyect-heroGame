<?php

namespace backend\tests\unit\Core\AvailableHeroes\Domain\ValueObjects;

use App\Core\AvailableHeroes\Domain\ValueObjects\AvailableHeroName;
use backend\tests\unit\Core\Shared\Domain\wordFaker;

final class AvailableHeroNameFaker
{
    public static function create(string $value): AvailableHeroName
    {
        return new AvailableHeroName($value);
    }

    public static function random(): AvailableHeroName
    {
        return new AvailableHeroName($value ?? wordFaker::create());
    }
}