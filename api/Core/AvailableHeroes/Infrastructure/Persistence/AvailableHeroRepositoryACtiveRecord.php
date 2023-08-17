<?php

namespace api\Core\AvailableHeroes\Infrastructure\Persistence;


use api\Core\AvailableHeroes\Domain\AvailableHero;
use api\Core\AvailableHeroes\Domain\AvailableHeroes;
use api\Core\AvailableHeroes\Domain\Repository\AvailableHeroesRepositoryInterface;
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

class AvailableHeroRepositoryACtiveRecord implements AvailableHeroesRepositoryInterface
{
    public function getbyId(int $id): ?AvailableHero
    {
        $availableHeroId = new AvailableHeroId($id);
        $availableHeroModel = AvailableHeroModel::findOne($availableHeroId);
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
        $attack_min = new Stats($availableHeroModel->attack_min);
        $attack_max = new Stats($availableHeroModel->attack_max); 
        $b_attack_min = new Boost($availableHeroModel->b_attack_min);
        $b_Battack_max = new Boost($availableHeroModel->b_Battack_max);
        $defense_min = new Stats($availableHeroModel->defense_min);
        $defense_max = new Stats($availableHeroModel->defense_max);
        $b_defense_min = new Boost($availableHeroModel->b_defense_min);
        $b_defense_max = new Boost($availableHeroModel->b_defense_max);
        $hp_min = new Stats($availableHeroModel->hp_min);
        $hp_max = new Stats($availableHeroModel->hp_max);
        $b_hp_min = new Boost($availableHeroModel->b_hp_min);
        $b_hp_max = new Boost($availableHeroModel->b_hp_max);
        $sp_attack_min = new Stats($availableHeroModel->sp_attack_min);
        $sp_attack_max = new Stats($availableHeroModel->sp_attack_max);
        $b_sp_attack_min = new Boost($availableHeroModel->b_sp_attack_min);
        $b_sp_attack_max = new Boost($availableHeroModel->b_sp_attack_max);
        $sp_defense_min = new Stats($availableHeroModel->sp_defense_min);
        $sp_defense_max = new Stats($availableHeroModel->sp_defense_max);
        $b_sp_defense_min = new Boost($availableHeroModel->b_sp_defense_min);
        $b_sp_defense_max = new Boost($availableHeroModel->b_sp_defense_max);
        $speed_min = new Stats($availableHeroModel->speed_min);
        $speed_max = new Stats($availableHeroModel->speed_max);
        $b_speed_min = new Boost($availableHeroModel->b_speed_min);
        $b_speed_max = new Boost($availableHeroModel->b_speed_max);
        $farming_min = new Stats($availableHeroModel->farming_min);
        $farming_max = new Stats($availableHeroModel->farming_max);
        $b_farming_min = new Boost($availableHeroModel->b_farming_min);
        $b_farming_max = new Boost($availableHeroModel->b_farming_max);
        $steeling_min = new Stats($availableHeroModel->steeling_min);
        $steeling_max = new Stats($availableHeroModel->steeling_max);
        $b_steeling_min = new Boost($availableHeroModel->b_steeling_min);
        $b_steeling_max = new Boost($availableHeroModel->b_steeling_max);
        $wooding_min = new Stats($availableHeroModel->wooding_min);
        $wooding_max = new Stats($availableHeroModel->wooding_max);
        $b_wooding_min = new Boost($availableHeroModel->b_wooding_min);
        $b_wooding_max = new Boost($availableHeroModel->b_wooding_max);
        $available = $availableHeroModel->available;
        $created_at = DateTime::createFromFormat('U', $availableHeroModel->created_at);
        $updated_at = DateTime::createFromFormat('U', $availableHeroModel->updated_at);
        $created_by = new UUID($availableHeroModel->created_by);
        $updated_by = new UUID($availableHeroModel->updated_by);
    
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
            $attack_min,
            $attack_max,
            $b_attack_min,
            $b_Battack_max,
            $defense_min,
            $defense_max,
            $b_defense_min,
            $b_defense_max,
            $hp_min,
            $hp_max,
            $b_hp_min,
            $b_hp_max,
            $sp_attack_min,
            $sp_attack_max,
            $b_sp_attack_min,
            $b_sp_attack_max,
            $sp_defense_min,
            $sp_defense_max,
            $b_sp_defense_min,
            $b_sp_defense_max,
            $speed_min,
            $speed_max,
            $b_speed_min,
            $b_speed_max,
            $farming_min,
            $farming_max,
            $b_farming_min,
            $b_farming_max,
            $steeling_min,
            $steeling_max,
            $b_steeling_min,
            $b_steeling_max,
            $wooding_min,
            $wooding_max,
            $b_wooding_min,
            $b_wooding_max,
            $available,
            $created_at,
            $updated_at,
            $created_by,
            $updated_by
        );
    }

    public function getByrarity(int $rarity): AvailableHeroes
    {
        $availableHeroes = AvailableHeroModel::findAll(['rarity_id' => $rarity]);
        return new AvailableHeroes($availableHeroes);
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

    public function save(AvailableHero $availableHero): void
    {
        $model = AvailableHeroMapper::toModel($availableHero);
        $model->save();
    }
}
