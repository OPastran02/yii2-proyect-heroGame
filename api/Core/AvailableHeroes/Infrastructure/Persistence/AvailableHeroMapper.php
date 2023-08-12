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
        $model->id = $availableHero->id()->value();
        $model->name = $availableHero->name()->value();
        $model->description = $availableHero->description()->value();
        $model->world = $availableHero->world()->value();
        $model->avatar = $availableHero->avatar()->value();
        $model->avatarBlock = $availableHero->avatarBlock()->value();
        $model->race_id = $availableHero->rarityId()->value();
        $model->rarity_id = $availableHero->rarityId()->value();
        $model->nature_id = $availableHero->natureId()->value();
        $model->type_id = $availableHero->typeId()->value();
        $model->attack_min = $availableHero->attackMin()->value();
        $model->attack_max = $availableHero->attackMax()->value();
        $model->b_attack_min = $availableHero->bAttackMin()->value();
        $model->b_Battack_max = $availableHero->bAttackMax()->value();
        $model->defense_min = $availableHero->defenseMin()->value();
        $model->defense_max = $availableHero->defenseMax()->value();
        $model->b_defense_min = $availableHero->bDefenseMin()->value();
        $model->b_defense_max = $availableHero->bDefenseMax()->value();
        $model->hp_min = $availableHero->hpMin()->value();
        $model->hp_max = $availableHero->hpMax()->value();
        $model->b_hp_min = $availableHero->bHpMin()->value();
        $model->b_hp_max = $availableHero->bHpMax()->value();
        $model->sp_attack_min = $availableHero->spAttackMin()->value();
        $model->sp_attack_max = $availableHero->spAttackMax()->value();
        $model->b_sp_attack_min = $availableHero->bSpAttackMin()->value();
        $model->b_sp_attack_max = $availableHero->bSpAttackMax()->value();
        $model->sp_defense_min = $availableHero->spDefenseMin()->value();
        $model->sp_defense_max = $availableHero->spDefenseMax()->value();
        $model->b_sp_defense_min = $availableHero->bSpDefenseMin()->value();
        $model->b_sp_defense_max = $availableHero->bSpDefenseMax()->value();
        $model->speed_min = $availableHero->speedMin()->value();
        $model->speed_max = $availableHero->speedMax()->value();
        $model->b_speed_min = $availableHero->bSpeedMin()->value();
        $model->b_speed_max = $availableHero->bSpeedMax()->value();
        $model->farming_min = $availableHero->farmingMin()->value();
        $model->farming_max = $availableHero->farmingMax()->value();
        $model->b_farming_min = $availableHero->bFarmingMin()->value();
        $model->b_farming_max = $availableHero->bFarmingMax()->value();
        $model->steeling_min = $availableHero->steelingMin()->value();
        $model->steeling_max = $availableHero->steelingMax()->value();
        $model->b_steeling_min = $availableHero->bSteelingMin()->value();
        $model->b_steeling_max = $availableHero->bSteelingMax()->value();
        $model->wooding_min = $availableHero->woodingMin()->value();
        $model->wooding_max = $availableHero->woodingMax()->value();
        $model->b_wooding_min = $availableHero->bWoodingMin()->value();
        $model->b_wooding_max = $availableHero->bWoodingMax()->value();
        $model->available = $availableHero->available();
        $model->created_at = $availableHero->createdAt();
        $model->updated_at = $availableHero->updatedAt();
        $model->created_by = $availableHero->createdBy();
        $model->updated_by = $availableHero->updatedBy();

        return $model;
    }
}