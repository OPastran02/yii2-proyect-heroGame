<?php

declare(strict_types=1);

namespace App\Core\AvailableHeroes\Domain;

use App\Shared\Domain\Collection;

final class AvailableHeroes extends Collection
{
    protected function type(): string
    {
        return AvailableHero::class;
    }
}