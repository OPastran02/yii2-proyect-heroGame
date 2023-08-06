<?php   

namespace App\Core\AvailableHeroes\Domain;

use App\Shared\Domain\Criteria\Criteria;

interface AvailableHeroesRepositoryInterface
{
    public function getbyId(AvailableHeroesId $id): ?AvailableHero;
    
    public function getByrarity(FkId $rarity_id): array;

    public function delete(AvailableHero $availableHeroes): void;

    public function save(AvailableHero $availableHeroes): void;
}