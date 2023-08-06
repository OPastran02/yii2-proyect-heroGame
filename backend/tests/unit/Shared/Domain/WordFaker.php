<?php

declare(strict_types=1);

namespace backend\tests\unit\Shared\Domain;

final class WordFaker
{
    public static function create(): string
    {
        return FakerCreator::random()->word;
    }
}