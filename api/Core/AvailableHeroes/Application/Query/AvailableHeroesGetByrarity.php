<?php

declare(strict_types=1);

namespace api\Core\AvailableHeroes\Application\Query;

use api\Core\AvailableHeroes\Domain\AvailableHero;
use api\Core\AvailableHeroes\Domain\AvailableHeroes;
use api\Core\AvailableHeroes\Domain\Repository\AvailableHeroesRepositoryInterface;
use api\Core\AvailableHeroes\Domain\ValueObjects\AvailableHeroId;
use api\Core\AvailableHeroes\Domain\Exceptions\AvailableHeroesNotFound;

final class AvailableHeroesGetByrarity
{
    private AvailableHeroesRepositoryInterface $repository;
    private int $id;

    public function __construct(AvailableHeroesRepositoryInterface $repository){
        $this->repository = $repository;
        $this->id = $id;
    }

    public function __invoke(): AvailableHeroes
    {
        $availableHeroes = $this->repository->getByrarity($this->id);
        if (empty($availableHeroes)) throw new AvailableHeroNotFound("No heroes found for Rarity ID: " . $this->id );
        
        return $availableHeroes;
    }
}