<?php

declare(strict_types=1);

namespace api\Core\AvailableHeroes\Application\Request;

use api\Core\AvailableHeroes\Domain\AvailableHero;
use api\Core\AvailableHeroes\Domain\Repository\AvailableHeroesRepositoryInterface;
use api\Core\AvailableHeroes\Domain\ValueObjects\AvailableHeroId;
use api\Core\AvailableHeroes\Domain\Exceptions\AvailableHeroesNotFound;

class GetAHeroByIdRequest
{
    private int $id;

    public function __construct(int $id){
        $this->id=$id;
    }

    public function id(): int
    {
        return $this->id;
    }
}