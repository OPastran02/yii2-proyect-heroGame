<?php

namespace backend\tests\unit\Core\AvailableHeroes\Domain\ValueObjects;

use api\Core\AvailableHeroes\Domain\ValueObjects\AvailableHeroWorld;
use backend\tests\unit\Shared\Domain\wordFaker;

final class AvailableHeroWorldFaker
{
    public static function create(string $value): AvailableHeroWorld
    {
        return new AvailableHeroWorld($value);
    }

    public static function random(): AvailableHeroWorld
    {
        return new AvailableHeroWorld($value ?? wordFaker::create());
    }
}