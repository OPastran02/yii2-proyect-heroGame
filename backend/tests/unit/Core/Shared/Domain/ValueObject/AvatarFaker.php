<?php

namespace backend\tests\unit\Core\AvailableHeroes\Domain\ValueObjects;

use App\Shared\Domain\ValueObjects\Avatar;
use backend\tests\unit\Core\Shared\Domain\wordFaker;

final class AvatarFaker
{
    public static function create(string $value): Avatar
    {
        return new Avatar($value);
    }

    public static function random(): Avatar
    {
        return new Avatar($value ?? wordFaker::create());
    }
}