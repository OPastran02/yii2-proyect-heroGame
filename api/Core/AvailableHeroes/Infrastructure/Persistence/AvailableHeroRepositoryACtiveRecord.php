<?php

namespace api\Core\AvailableHeroes\Infrastructure\Persistence;

use api\Core\AvailableHeroes\Domain\ValueObjects\AvailableHeroId;
use api\Core\AvailableHeroes\Domain\AvailableHero;
use api\Core\AvailableHeroes\Domain\AvailableHeroes;
use api\Core\AvailableHeroes\Domain\Repository\AvailableHeroesRepositoryInterface;
use console\models\AvailableHeroes as AvailableHeroModel;

class AvailableHeroRepositoryACtiveRecord implements AvailableHeroesRepositoryInterface
{
    public function getbyId(AvailableHeroId $id): ?AvailableHero
    {
        $availableHero = AvailableHeroModel::findOne($id);
        return $availableHero->toDomain();
    }

    public function getByrarity(FkId $rarity): array
    {
        $availableHeroes = AvailableHeroModel::findAll(['rarity_id' => $rarity]);
        return new AvailableHeroes($availableHeroes);
    }

    public function delete(AvailableHeroId $id): void
    {
        $availableHero = AvailableHeroModel::findOne($id);
        $availableHero->delete();
    }

    public function save(AvailableHero $available): void
    {
        $availableHero = $available->toModel();
        $availableHero->save();
    }
}
