<?php

declare(strict_types=1);

namespace api\Core\AvailableHeroes\Application\Find;

use api\Core\AvailableHeroes\Domain\AvailableHero;
use api\Core\AvailableHeroes\Domain\AvailableHeroesRepositoryInterface as AvailableHeroRepository;
use api\Core\AvailableHeroes\Domain\ValueObjects\AvailableHeroId;
use api\Core\AvailableHeroes\Domain\Exceptions\AvailableHeroesNotFound;

final class AvailableHeroesGetByrarity
{
    public function __construct(
        private AvailableHeroRepository $repository
    ){}

    public function __invoke(int $id): array
    {
        $availableHeroes = $this->repository->getByrarity($id);

        if (empty($availableHeroes)) {
            throw new AvailableHeroNotFound("No heroes found for Rarity ID: " . $rarityId->getValue());
        }

        return $availableHeroes;
    }
}