<?php

declare(strict_types=1);

namespace api\Core\AvailableHeroes\Infrastructure\Persistence;

use api\Core\AvailableHeroes\Domain\AvailableHero;
use api\Core\AvailableHeroes\Domain\AvailableHeroes;
use common\models\availablehero as AvailableHeroModel;
use common\models\User;
use api\Core\AvailableHeroes\Domain\ValueObjects\AvailableHeroId;
use api\Core\AvailableHeroes\Domain\ValueObjects\AvailableHeroDescription;
use api\Core\AvailableHeroes\Domain\ValueObjects\AvailableHeroName;
use api\Core\AvailableHeroes\Domain\ValueObjects\AvailableHeroWorld;
use api\Shared\Domain\ValueObject\Avatar;
use api\Shared\Domain\ValueObject\Boost;
use api\Shared\Domain\ValueObject\FkId;
use api\Shared\Domain\ValueObject\Stats;
use api\Shared\Domain\ValueObject\UUID;
use DateTime;

final class AvailableHeroMapper
{
    public static function toModel(AvailableHero $availableHero): AvailableHeroModel
    {
        //$user=User::findId($availableHero->createdBy()->value());
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
        $model->available = $availableHero->available() ? 1 : 0;
        $model->created_at = (int) $availableHero->createdAt()->getTimestamp();;
        $model->updated_at = (int) $availableHero->createdAt()->getTimestamp();;
        $model->created_by = $availableHero->createdBy()->value();
        $model->updated_by = $availableHero->createdBy()->value();
        //codecept_debug($model);

        return $model;
    }

    public static function toDomain(AvailableHeroModel $model): AvailableHero
    {
        $availableHero = AvailableHero::create(
            new AvailableHeroId((int)$model->id),
            new AvailableHeroName((string)$model->name),
            new AvailableHeroDescription((string)$model->description),
            new AvailableHeroWorld((string)$model->world),
            new Avatar((string)$model->avatar),
            new Avatar((string)$model->avatarBlock),
            new FkId((int)$model->race_id),
            new FkId((int)$model->rarity_id),
            new FkId((int)$model->nature_id),
            new FkId((int)$model->type_id),
            new Stats((int)$model->attack_min),
            new Stats((int)$model->attack_max),
            new Boost((int)$model->b_attack_min),
            new Boost((int)$model->b_Battack_max),
            new Stats((int)$model->defense_min),
            new Stats((int)$model->defense_max),
            new Boost((int)$model->b_defense_min),
            new Boost((int)$model->b_defense_max),
            new Stats((int)$model->hp_min),
            new Stats((int)$model->hp_max),
            new Boost((int)$model->b_hp_min),
            new Boost((int)$model->b_hp_max),
            new Stats((int)$model->sp_attack_min),
            new Stats((int)$model->sp_attack_max),
            new Boost((int)$model->b_sp_attack_min),
            new Boost((int)$model->b_sp_attack_max),
            new Stats((int)$model->sp_defense_min),
            new Stats((int)$model->sp_defense_max),
            new Boost((int)$model->b_sp_defense_min),
            new Boost((int)$model->b_sp_defense_max),
            new Stats((int)$model->speed_min),
            new Stats((int)$model->speed_max),
            new Boost((int)$model->b_speed_min),
            new Boost((int)$model->b_speed_max),
            new Stats((int)$model->farming_min),
            new Stats((int)$model->farming_max),
            new Boost((int)$model->b_farming_min),
            new Boost((int)$model->b_farming_max),
            new Stats((int)$model->steeling_min),
            new Stats((int)$model->steeling_max),
            new Boost((int)$model->b_steeling_min),
            new Boost((int)$model->b_steeling_max),
            new Stats((int)$model->wooding_min),
            new Stats((int)$model->wooding_max),
            new Boost((int)$model->b_wooding_min),
            new Boost((int)$model->b_wooding_max),
            (int)$model->available,
            new DateTime('@' . $model->created_at),
            new DateTime('@' . $model->updated_at),
            new UUID($model->created_by),
            new UUID($model->created_by)
        );

        return $availableHero;
    }

}