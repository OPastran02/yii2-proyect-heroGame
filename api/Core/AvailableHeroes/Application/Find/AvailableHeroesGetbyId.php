<?php

declare(strict_types=1);

namespace api\Core\AvailableHeroes\Application\Find;

use api\Core\AvailableHeroes\Domain\AvailableHero;
use api\Core\AvailableHeroes\Domain\Repository\AvailableHeroesRepositoryInterface as AvailableHeroRepository;
use api\Core\AvailableHeroes\Domain\ValueObjects\AvailableHeroId;
use api\Core\AvailableHeroes\Domain\Exceptions\AvailableHeroesNotFound;

final class AvailableHeroesGetbyId
{
    
    public function __construct(
        private AvailableHeroRepository $repository
    ){}

    public function __invoke(int $id): AvailableHero
    {
        $availableHero = $this->repository->getbyId($id);

        if (null === $availableHero) {
            throw new AvailableHeroNotFound($id);
        }

        return $availableHero;
    }
}