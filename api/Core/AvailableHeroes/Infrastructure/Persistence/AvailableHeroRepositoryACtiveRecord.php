<?php

namespace App\Core\AvailableHeroes\Infrastructure\Persistence;

use App\Core\AvailableHeroes\Domain\AvailableHero;
use App\Core\AvailableHeroes\Domain\AvailableHeroes;
use App\Core\AvailableHeroes\Domain\Repository\AvailableHeroesRepositoryInterface;
use console\models\AvailableHero as AvailableHeroModel;

class AvailableHeroRepositoryACtiveRecord implements AvailableHeroesRepositoryInterface
{
    public function getbyId(int $id): AvailableHero
    {
        $availableHero = AvailableHeroModel::findOne($id);
        return $availableHero->toDomain();
    }

    public function getByrarity(int $rarity): array
    {
        $availableHeroes = AvailableHeroModel::findAll(['rarity_id' => $rarity]);
        return new AvailableHeroes($availableHeroes);
    }

    public function delete(int $id): void
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
