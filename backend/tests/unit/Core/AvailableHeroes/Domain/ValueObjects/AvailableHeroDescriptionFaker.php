<?php

namespace backend\tests\unit\Core\AvailableHeroes\Domain\ValueObjects;

use api\Core\AvailableHeroes\Domain\ValueObjects\AvailableHeroDescription;
use backend\tests\unit\Shared\Domain\WordFaker;

final class AvailableHeroDescriptionFaker
{
    public static function create(string $value): AvailableHeroDescription
    {
        return new AvailableHeroDescription($value);
    }

    public static function random(): AvailableHeroDescription
    {
        return new AvailableHeroDescription($value ?? WordFaker::create());
    }
}