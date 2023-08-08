<?php

declare(strict_types=1);

namespace api\Core\AvailableHeroes\Infrastructure\Persistence;

use api\Core\AvailableHeroes\Domain\AvailableHero;
use api\Core\AvailableHeroes\Domain\AvailableHeroes;
use console\models\AvailableHeroes as AvailableHeroModel;

final class AvailableHeroMapper
{
    public static function toModel(AvailableHero $availableHero): AvailableHeroModel
    {
        $model = new AvailableHeroModel();
        $model->id = $availableHero->id();
        $model->name = $availableHero->name();
        $model->description = $availableHero->description();
        $model->world = $availableHero->world();
        $model->avatar = $availableHero->avatar();
        $model->avatarBlock = $availableHero->avatarBlock();
        $model->rarity_id = $availableHero->rarityId();
        $model->nature_id = $availableHero->natureId();
        $model->type_id = $availableHero->typeId();
        $model->attack_min = $availableHero->attackMin();
        $model->attack_max = $availableHero->attackMax();
        $model->b_attack_min = $availableHero->bAttackMin();
        $model->b_Battack_max = $availableHero->bAttackMax();
        $model->defense_min = $availableHero->defenseMin();
        $model->defense_max = $availableHero->defenseMax();
        $model->b_defense_min = $availableHero->bDefenseMin();
        $model->b_defense_max = $availableHero->bDefenseMax();
        $model->hp_min = $availableHero->hpMin();
        $model->hp_max = $availableHero->hpMax();
        $model->b_hp_min = $availableHero->bHpMin();
        $model->b_hp_max = $availableHero->bHpMax();
        $model->sp_attack_min = $availableHero->spAttackMin();
        $model->sp_attack_max = $availableHero->spAttackMax();
        $model->b_sp_attack_min = $availableHero->bSpAttackMin();
        $model->b_sp_attack_max = $availableHero->bSpAttackMax();
        $model->sp_defense_min = $availableHero->spDefenseMin();
        $model->sp_defense_max = $availableHero->spDefenseMax();
        $model->b_sp_defense_min = $availableHero->bSpDefenseMin();
        $model->b_sp_defense_max = $availableHero->bSpDefenseMax();
        $model->speed_min = $availableHero->speedMin();
        $model->speed_max = $availableHero->speedMax();
        $model->b_speed_min = $availableHero->bSpeedMin();
        $model->b_speed_max = $availableHero->bSpeedMax();
        $model->farming_min = $availableHero->farmingMin();
        $model->farming_max = $availableHero->farmingMax();
        $model->b_farming_min = $availableHero->bFarmingMin();
        $model->b_farming_max = $availableHero->bFarmingMax();
        $model->steeling_min = $availableHero->steelingMin();
        $model->steeling_max = $availableHero->steelingMax();
        $model->b_steeling_min = $availableHero->bSteelingMin();
        $model->b_steeling_max = $availableHero->bSteelingMax();
        $model->wooding_min = $availableHero->woodingMin();
        $model->wooding_max = $availableHero->woodingMax();
        $model->b_wooding_min = $availableHero->bWoodingMin();
        $model->b_wooding_max = $availableHero->bWoodingMax();
        $model->available = $availableHero->available();
        $model->created_at = $availableHero->createdAt();
        $model->updated_at = $availableHero->updatedAt();
        $model->created_by = $availableHero->createdBy();
        $model->updated_by = $availableHero->updatedBy();

        // ... otros atributos ...
        return $model;
    }
}