<?php

namespace api\Core\AvailableHeroes\Infrastructure\Persistence;

use api\Core\AvailableHeroes\Domain\ValueObjects\AvailableHeroId;
use api\Shared\Domain\ValueObject\FkId;
use api\Core\AvailableHeroes\Domain\AvailableHero;
use api\Core\AvailableHeroes\Domain\AvailableHeroes;
use api\Core\AvailableHeroes\Domain\Repository\AvailableHeroesRepositoryInterface;
use console\models\AvailableHeroes as AvailableHeroModel;
use Yii;

class AvailableHeroRepositoryACtiveRecord implements AvailableHeroesRepositoryInterface
{
    public function getbyId(AvailableHeroId $id): ?AvailableHero
    {
        $availableHeroModel = AvailableHeroModel::findOne($id);
        if (!$availableHeroModel) {
            return null;
        }

        $id = new AvailableHeroId($availableHeroModel->id);
        $name = new AvailableHeroName($availableHeroModel->name);
        $description = new AvailableHeroDescription($availableHeroModel->description);
        $world = new AvailableHeroWorld($availableHeroModel->world);
        $avatar = new Avatar($availableHeroModel->avatar);
        $avatarBlock = new Avatar($availableHeroModel->avatarBlock);
        $race_id = new FkId($availableHeroModel->rarity_id);
        $rarity_id = new FkId($availableHeroModel->rarity_id);
        $nature_id = new FkId($availableHeroModel->nature_id);
        $type_id = new FkId($availableHeroModel->type_id);
        $attack = new Stats($availableHeroModel->attack_min, $availableHeroModel->attack_max);
        $b_attack = new Boost($availableHeroModel->b_attack_min, $availableHeroModel->b_Battack_max);
        $defense = new Stats($availableHeroModel->defense_min, $availableHeroModel->defense_max);
        $b_defense = new Boost($availableHeroModel->b_defense_min, $availableHeroModel->b_defense_max);
        $hp = new Stats($availableHeroModel->hp_min, $availableHeroModel->hp_max);
        $b_hp = new Boost($availableHeroModel->b_hp_min, $availableHeroModel->b_hp_max);
        $sp_attack = new Stats($availableHeroModel->sp_attack_min, $availableHeroModel->sp_attack_max);
        $b_sp_attack = new Boost($availableHeroModel->b_sp_attack_min, $availableHeroModel->b_sp_attack_max);
        $sp_defense = new Stats($availableHeroModel->sp_defense_min, $availableHeroModel->sp_defense_max);
        $b_sp_defense = new Boost($availableHeroModel->b_sp_defense_min, $availableHeroModel->b_sp_defense_max);
        $speed = new Stats($availableHeroModel->speed_min, $availableHeroModel->speed_max);
        $b_speed = new Boost($availableHeroModel->b_speed_min, $availableHeroModel->b_speed_max);
        $farming = new Stats($availableHeroModel->farming_min, $availableHeroModel->farming_max);
        $b_farming = new Boost($availableHeroModel->b_farming_min, $availableHeroModel->b_farming_max);
        $steeling = new Stats($availableHeroModel->steeling_min, $availableHeroModel->steeling_max);
        $b_steeling = new Boost($availableHeroModel->b_steeling_min, $availableHeroModel->b_steeling_max);
        $wooding = new Stats($availableHeroModel->wooding_min, $availableHeroModel->wooding_max);
        $b_wooding = new Boost($availableHeroModel->b_wooding_min, $availableHeroModel->b_wooding_max);
        $available = $availableHeroModel->available;
        $created_at = new DateTimeImmutableValueObject($availableHeroModel->created_at);
        $updated_at = new DateTimeImmutableValueObject($availableHeroModel->updated_at);
        $created_by = $availableHeroModel->created_by;
        $updated_by = $availableHeroModel->updated_by;
    
        return new AvailableHero(
            $id,
            $name,
            $description,
            $world,
            $avatar,
            $avatarBlock,
            $race_id,
            $rarity_id,
            $nature_id,
            $type_id,
            $attack,
            $b_attack,
            $defense,
            $b_defense,
            $hp,
            $b_hp,
            $sp_attack,
            $b_sp_attack,
            $sp_defense,
            $b_sp_defense,
            $speed,
            $b_speed,
            $farming,
            $b_farming,
            $steeling,
            $b_steeling,
            $wooding,
            $b_wooding,
            $available,
            $created_at,
            $updated_at,
            $created_by,
            $updated_by
        );
    }

    public function getByrarity(FkId $rarity): AvailableHeroes
    {
        $availableHeroes = AvailableHeroModel::findAll(['rarity_id' => $rarity->value()]);
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
