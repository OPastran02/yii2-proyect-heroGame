<?php

declare(strict_types=1);

namespace backend\tests\unit\Shared\Domain;

use Faker\Factory;
use Faker\Generator;

final class FakerCreator
{
    private static ?Generator $faker;

    public static function random(): Generator
    {
        return self::$faker = self::$faker ?? Factory::create();
    }
}