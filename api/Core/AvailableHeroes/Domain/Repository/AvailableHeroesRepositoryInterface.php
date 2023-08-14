<?php   

namespace api\Core\AvailableHeroes\Domain\Repository;

use api\Core\AvailableHeroes\Domain\ValueObjects\AvailableHeroId;
use api\Core\AvailableHeroes\Domain\AvailableHero;
use api\Core\AvailableHeroes\Domain\AvailableHeroes;
use api\Shared\Domain\ValueObject\FkId;

interface AvailableHeroesRepositoryInterface
{
    public function getbyId(int $id): ?AvailableHero;
    
    public function getByrarity(FkId $rarity_id): AvailableHeroes;

    public function delete(int $id): void;  

    public function save(AvailableHero $availableHeroes): void;
}