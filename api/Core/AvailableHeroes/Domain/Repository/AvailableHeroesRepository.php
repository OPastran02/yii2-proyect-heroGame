<?php   

namespace App\Core\AvailableHeroes\Domain;

use App\Shared\Domain\Criteria\Criteria;

interface AvailableHeroRepository
{
    public function save(AvailableHero $availableHeroes): void;

    public function search(AvailableHeroesId $id): ?AvailableHero;
    
    public function searchByCriteria(Criteria $criteria): array;

}