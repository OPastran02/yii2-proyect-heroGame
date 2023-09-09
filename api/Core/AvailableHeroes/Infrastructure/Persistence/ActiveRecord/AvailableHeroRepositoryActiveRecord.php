<?php

declare(strict_types=1);

namespace api\Core\AvailableHeroes\Infrastructure\Persistence\ActiveRecord;

use api\Core\AvailableHeroes\Domain\AvailableHero;
use api\Core\AvailableHeroes\Domain\AvailableHeroes;
use api\Core\AvailableHeroes\Domain\Repository\IAvailableHeroRepository;
use common\models\availablehero as AvailableHeroModel;
use api\Core\AvailableHeroes\Infrastructure\Persistence\AvailableHeroMapper;    

use api\Core\AvailableHeroes\Domain\ValueObjects\AvailableHeroName;
use api\Core\AvailableHeroes\Domain\ValueObjects\AvailableHeroDescription;
use api\Core\AvailableHeroes\Domain\ValueObjects\AvailableHeroWorld;
use api\Core\AvailableHeroes\Domain\ValueObjects\AvailableHeroId;
use api\Shared\Domain\ValueObject\Avatar;
use api\Shared\Domain\ValueObject\FkId;
use api\Shared\Domain\ValueObject\Stats;
use api\Shared\Domain\ValueObject\Boost;
use api\Shared\Domain\ValueObject\UUID;


use Yii;
use DateTime;

class AvailableHeroRepositoryActiveRecord implements IAvailableHeroRepository
{
    public function getbyId(int $id): ?AvailableHero
    {
        $model = AvailableHeroModel::findOne($id);  
        if (!$model) {
            return null;
        }else{
            return AvailableHero::fromPrimitives(...$model["attributes"]);
        }
    }

    public function getByrarity(int $rarity): ?AvailableHeroes
    {
        $model = AvailableHeroModel::findAll(['rarity_id' => $rarity]);
        if (!$model) {
            return null;
        }else{
            return new AvailableHeroes($model);
        }   
    }

    public function save($arr): ?int
    {
        $model = new AvailableHeroModel();
        $model->id = isset($arr['id']) ? $arr['id'] : null;
        $model->name = $arr['name'];
        $model->description = $arr['description'];
        $model->world = $arr['world'];
        $model->avatar = $arr['avatar'];
        $model->avatarBlock = $arr['avatarBlock'];
        $model->race_id = $arr['race_id'];
        $model->rarity_id = $arr['rarity_id'];
        $model->nature_id = $arr['nature_id'];
        $model->type_id = $arr['type_id'];
        $model->attack_min = $arr['attack_min'];
        $model->attack_max = $arr['attack_max'];
        $model->b_attack_min = $arr['b_attack_min'];
        $model->b_Battack_max = $arr['b_Battack_max'];
        $model->defense_min = $arr['defense_min'];
        $model->defense_max = $arr['defense_max'];
        $model->b_defense_min = $arr['b_defense_min'];
        $model->b_defense_max = $arr['b_defense_max'];
        $model->hp_min = $arr['hp_min'];
        $model->hp_max = $arr['hp_max'];
        $model->b_hp_min = $arr['b_hp_min'];
        $model->b_hp_max = $arr['b_hp_max'];
        $model->sp_attack_min = $arr['sp_attack_min'];
        $model->sp_attack_max = $arr['sp_attack_max'];
        $model->b_sp_attack_min = $arr['b_sp_attack_min'];
        $model->b_sp_attack_max = $arr['b_sp_attack_max'];
        $model->sp_defense_min = $arr['sp_defense_min'];
        $model->sp_defense_max = $arr['sp_defense_max'];
        $model->b_sp_defense_min = $arr['b_sp_defense_min'];
        $model->b_sp_defense_max = $arr['b_sp_defense_max'];
        $model->speed_min = $arr['speed_min'];
        $model->speed_max = $arr['speed_max'];
        $model->b_speed_min = $arr['b_speed_min'];
        $model->b_speed_max = $arr['b_speed_max'];
        $model->farming_min = $arr['farming_min'];
        $model->farming_max = $arr['farming_max'];
        $model->b_farming_min = $arr['b_farming_min'];
        $model->b_farming_max = $arr['b_farming_max'];
        $model->steeling_min = $arr['steeling_min'];
        $model->steeling_max = $arr['steeling_max'];
        $model->b_steeling_min = $arr['b_steeling_min'];
        $model->b_steeling_max = $arr['b_steeling_max'];
        $model->wooding_min = $arr['wooding_min'];
        $model->wooding_max = $arr['wooding_max'];
        $model->b_wooding_min = $arr['b_wooding_min'];
        $model->b_wooding_max = $arr['b_wooding_max'];
        $model->available = $arr['available'] ? 1 : 0;
        $model->created_at = isset($arr['created_at']) ? (int) $arr['created_at'] : null;
        $model->updated_at = isset($arr['updated_at']) ? (int) $arr['updated_at'] : null;
        $model->created_by = isset($arr['created_by']) ? $arr['created_by'] : null;
        $model->updated_by = isset($arr['updated_by']) ? $arr['updated_by'] : null;

        if ($model->save()) {
            return $model->getPrimaryKey(); // Aquí obtienes el ID generado
        }
    }


    public function delete(int $id): void
    {
        $availableHero = $this->getById($id); // Obtener el AvailableHero a través de la lógica del dominio
        if ($availableHero) {
            $availableHeroModel = AvailableHeroMapper::toModel($availableHero);
            if ($availableHeroModel->validate()) {
                $deleted = $availableHeroModel->delete();
            }
        }
    }



    public function update(AvailableHero $availableHero): ?int
    {
        $model = AvailableHeroMapper::toModel($availableHero);
        if ($model->update()) {
            return $model->getPrimaryKey(); // Aquí obtienes el ID generado
        }else{
            return 0;
        }
    }
}
