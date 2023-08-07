<?php

namespace backend\tests\unit\Core\Shared\Domain\ValueObject;

use api\Shared\Domain\ValueObject\Avatar;
use backend\tests\unit\Shared\Domain\wordFaker;

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