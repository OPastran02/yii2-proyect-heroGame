<?php

namespace backend\tests\unit\Core\Shared\Domain\ValueObject;
use api\Shared\Domain\ValueObject\FkId;
use backend\tests\unit\Shared\Domain\IntegerFaker;

final class FkIdFaker
{
    public static function create(string $value): FkId
    {
        return new FkId($value);
    }

    public static function random(): FkId
    {
        return new FkId($value ?? IntegerFaker::between(1,99));
    }
}