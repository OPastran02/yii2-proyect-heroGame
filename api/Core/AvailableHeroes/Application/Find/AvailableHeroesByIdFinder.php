<?php

declare(strict_types=1);

namespace App\Core\AvailableHeroes\Application\Find;

use App\Core\AvailableHeroes\Domain\AvailableHero;
use App\Core\AvailableHeroes\Domain\AvailableHeroRepository;
use App\Core\AvailableHeroes\Domain\ValueObjects\AvailableHeroId;
use App\Core\AvailableHeroes\Domain\Exceptions\AvailableHeroNotFound;

final class AvailableHeroesbyIdFinder
{
    public function __construct(
        private AvailableHeroRepository $repository
    ){}

    public function __invoke(AvailableHeroId $id): AvailableHero
    {
        $availableHero = $this->repository->findbyId($id);

        if (null === $availableHero) {
            throw new AvailableHeroNotFound($id);
        }

        return $availableHero;
    }
}