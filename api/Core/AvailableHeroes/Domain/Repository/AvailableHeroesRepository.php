<?php   

namespace App\Core\AvailableHeroes\Domain;

use App\Shared\Domain\Criteria\Criteria;

interface AvailableHeroRepository
{
    public function save(AvailableHero $availableHeroes): void;

    public function findbyId(AvailableHeroesId $id): ?AvailableHero;
    
    public function searchByrarity(FkId $rarity_id): array;
}