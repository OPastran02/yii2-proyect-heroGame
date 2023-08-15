<?php

declare(strict_types=1);

namespace api\Core\AvailableHeroes\Application\Find;

use api\Core\AvailableHeroes\Domain\AvailableHero;
use api\Core\AvailableHeroes\Domain\AvailableHeroes;
use api\Core\AvailableHeroes\Domain\Repository\AvailableHeroesRepositoryInterface;
use api\Core\AvailableHeroes\Domain\ValueObjects\AvailableHeroId;
use api\Core\AvailableHeroes\Domain\Exceptions\AvailableHeroesNotFound;

final class AvailableHeroesGetByrarity
{
    private AvailableHeroesRepositoryInterface $repository;
    
    public function __construct(AvailableHeroesRepositoryInterface $repository){
        $this->repository = $repository;
    }

    public function __invoke(int $id): AvailableHeroes
    {
        $availableHeroes = $this->repository->getByrarity($id);
        if (empty($availableHeroes)) throw new AvailableHeroNotFound("No heroes found for Rarity ID: " . $id);
        
        return $availableHeroes;
    }
}