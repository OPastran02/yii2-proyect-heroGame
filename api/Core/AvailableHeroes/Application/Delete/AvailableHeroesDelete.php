<?php

declare(strict_types=1);

namespace api\Core\AvailableHeroes\Application\Delete;

use api\Core\AvailableHeroes\Domain\AvailableHero;
use api\Core\AvailableHeroes\Domain\Repository\AvailableHeroesRepositoryInterface;
use api\Core\AvailableHeroes\Domain\ValueObjects\AvailableHeroId;
use api\Core\AvailableHeroes\Domain\Exceptions\AvailableHeroesNotFound;

final class AvailableHeroesDelete
{ 
    private AvailableHeroesRepositoryInterface $repository;
    
    public function __construct(AvailableHeroesRepositoryInterface $repository){
        $this->repository = $repository;
    }

    public function __invoke(int $id): void
    {
        $availableHero = $this->repository->getbyId($id);
        Var_dump($availableHero);
        if (null === $availableHero) throw new AvailableHeroNotFound($id);
        $this->repository->delete($id); 
    }
}