<?php

declare(strict_types=1);

namespace api\Core\AvailableHeroes\Domain;

final class AvailableHeroFinder
{
    public function __construct(private AvailableHeroesRepositoryInterface $repository)
    {
    }

    public function __invoke(AvailableHeroId $id): AvailableHeroes
    {
        $availableHero = $this->repository->search($id)
        if ($availableHero === null){
            throw new AvailableHeroNotExists($id);
        }

        return $availableHero;
    }
}