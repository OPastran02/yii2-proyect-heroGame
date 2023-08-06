<?php

namespace backend\tests\unit\Core\AvailableHeroes\Domain\ValueObjects;

use App\Core\AvailableHeroes\Domain\ValueObjects\AvailableHeroDescription;
use backend\tests\unit\Core\Shared\Domain\wordFaker;

final class AvailableHeroDescriptionFaker
{
    public static function create(string $value): AvailableHeroDescription
    {
        return new AvailableHeroDescription($value);
    }

    public static function random(): AvailableHeroDescription
    {
        return new AvailableHeroDescription($value ?? wordFaker::create());
    }
}