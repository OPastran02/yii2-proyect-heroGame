<?php

declare(strict_types=1);

namespace App\Core\AvailableHeroes\Domain\ValueObjects;

final class AvailableHeroId extends IntValueObject
{
    public function __construct(int $value)
    {
        parent::__construct($value);
    }
}