<?php

namespace backend\tests\unit\Core\AvailableHeroes\Domain\ValueObjects;

use api\Core\AvailableHeroes\Domain\ValueObjects\AvailableHeroName;
use backend\tests\unit\Shared\Domain\WordFaker;

final class AvailableHeroNameFaker
{
    public static function create(string $value): AvailableHeroName
    {
        return new AvailableHeroName($value);
    }

    public static function random(): AvailableHeroName
    {
        return new AvailableHeroName($value ?? WordFaker::create());
    }
}