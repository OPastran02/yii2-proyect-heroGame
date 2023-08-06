<?php

declare(strict_types=1);

namespace App\Core\AvailableHeroes\Application\Find;

use App\Core\AvailableHeroes\Domain\AvailableHero;
use App\Core\AvailableHeroes\Domain\AvailableHeroRepository;
use App\Core\AvailableHeroes\Domain\ValueObjects\AvailableHeroId;
use App\Core\AvailableHeroes\Domain\Exceptions\AvailableHeroNotFound;

final class AvailableHeroesByRarityFinder
{
    public function __construct(
        private AvailableHeroRepository $repository
    ){}

    public function __invoke(RarityId $rarityId): array
    {
        $availableHeroes = $this->repository->findByRarityId($rarityId);

        if (empty($availableHeroes)) {
            throw new AvailableHeroNotFound("No heroes found for Rarity ID: " . $rarityId->getValue());
        }

        return $availableHeroes;
    }
}