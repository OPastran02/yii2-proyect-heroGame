<?php   

namespace api\Core\AvailableHeroes\Domain\Repository;

use api\Core\AvailableHeroes\Domain\ValueObjects\AvailableHeroId;
use api\Core\AvailableHeroes\Domain\AvailableHero;
use api\Shared\Domain\ValueObject\FkId;

interface AvailableHeroesRepositoryInterface
{
    public function getbyId(AvailableHeroId $id): ?AvailableHero;
    
    public function getByrarity(FkId $rarity_id): array;

    public function delete(AvailableHeroId $id): void;  

    public function save(AvailableHero $availableHeroes): void;
}