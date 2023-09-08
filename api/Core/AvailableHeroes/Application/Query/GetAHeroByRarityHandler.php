<?php

declare(strict_types=1);

namespace api\Core\AvailableHeroes\Application\Query;

use api\Core\AvailableHeroes\Domain\AvailableHero;
use api\Core\AvailableHeroes\Domain\AvailableHeroes;
use api\Core\AvailableHeroes\Domain\Repository\IAvailableHeroRepository;
use api\Core\AvailableHeroes\Domain\ValueObjects\AvailableHeroId;
use api\Core\AvailableHeroes\Domain\Exceptions\AvailableHeroesNotFound;

class GetAHeroByRarityHandler
{
    private IAvailableHeroRepository $repository;

    public function __construct(IAvailableHeroRepository $repository)
    {
        $this->repository = $repository;
    }
 
    public function __invoke(int $rarity): ?AvailableHeroes
    {
        $heroes = $this->repository->getByrarity($id);
        return $heroes;
    }
}