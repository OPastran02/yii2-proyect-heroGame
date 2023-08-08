<?php

namespace backend\tests\unit\Core\AvailableHeroes\Domain;

use App\Core\AvailableHeroes\Domain\AvailableHero;
use App\Core\AvailableHeroes\Application\Create\AvailableHeroCreateCommand;
use App\Core\AvailableHeroes\Domain\AvailableHeroId;
use App\Core\AvailableHeroes\Domain\AvailableHeroName;
use App\Core\AvailableHeroes\Domain\AvailableHeroDescription;
use App\Core\AvailableHeroes\Domain\AvailableHeroWorld;
use App\Core\AvailableHeroes\Domain\Avatar;
use App\Core\AvailableHeroes\Domain\Boost;
use App\Core\AvailableHeroes\Domain\Stats;
use App\Shared\Domain\ValueObjects\FkId;
use DateTime;

final class AvailableHeroesTestCase
{
    public static function create(
        ?AvailableHeroId                 $id = null,
        ?AvailableHeroName               $name = null,
        ?AvailableHeroDescription        $description = null,
        ?AvailableHeroWorld              $world = null,
        ?Avatar                          $avatar = null,
        ?Avatar                          $avatarBlock = null,
        ?FkId                            $race_id = null,
        ?FkId                            $rarity_id = null,
        ?FkId                            $nature_id = null,
        ?FkId                            $type_id = null,
        ?Stats                           $attack_min = null,
        ?Stats                           $attack_max = null,
        ?Boost                           $b_attack_min = null,
        ?Boost                           $b_attack_max = null,
        ?Stats                           $defense_min = null,
        ?Stats                           $defense_max = null,
        ?Boost                           $b_defense_min = null,
        ?Boost                           $b_defense_max = null,
        ?Stats                           $hp_min = null,
        ?Stats                           $hp_max = null,
        ?Boost                           $b_hp_min = null,
        ?Boost                           $b_hp_max = null,
        ?Stats                           $sp_attack_min = null,
        ?Stats                           $sp_attack_max = null,
        ?Boost                           $b_sp_attack_min = null,
        ?Boost                           $b_sp_attack_max = null,
        ?Stats                           $sp_defense_min = null,
        ?Stats                           $sp_defense_max = null,
        ?Boost                           $b_sp_defense_min = null,
        ?Boost                           $b_sp_defense_max = null,
        ?Stats                           $speed_min = null,
        ?Stats                           $speed_max = null,
        ?Boost                           $b_speed_min = null,
        ?Boost                           $b_speed_max = null,
        ?Stats                           $farming_min = null,
        ?Stats                           $farming_max = null,
        ?Boost                           $b_farming_min = null,
        ?Boost                           $b_farming_max = null,
        ?Stats                           $steeling_min = null,
        ?Stats                           $steeling_max = null,
        ?Boost                           $b_steeling_min = null,
        ?Boost                           $b_steeling_max = null,
        ?Stats                           $wooding_min = null,
        ?Stats                           $wooding_max = null,
        ?Boost                           $b_wooding_min = null,
        ?Boost                           $b_wooding_max = null,
        ?bool                            $available = null, 
        ?DateTime                        $created_at = null,
        ?DateTime                        $updated_at = null,
        ?FkId                            $created_by = null,
        ?FkId                            $updated_by = null,
    ): AvailableHero{
        $id                     = $id ?? AvailableHeroIdFaker::random();
        $name                   = $name ?? AvailableHeroNameFaker::random();
        $description            = $description ?? AvailableHeroDescriptionFaker::random();
        $world                  = $world ?? AvailableHeroWorldFaker::random();
        $avatar                 = $avatar ?? AvatarFaker::random();
        $avatarBlock            = $avatarBlock ?? AvatarFaker::random();
        $race_id                = $race_id ?? FkIdFaker::random();
        $rarity_id              = $rarity_id ?? FkIdFaker::random();
        $nature_id              = $nature_id ?? FkIdFaker::random();
        $type_id                = $type_id ?? FkIdFaker::random();
        $attack_min             = $attack_min ?? StatsFaker::random();
        $attack_max             = $attack_max ?? StatsFaker::random();
        $b_attack_min           = $b_attack_min ?? BoostFaker::random();
        $b_attack_max           = $b_attack_max ?? BoostFaker::random();
        $defense_min            = $defense_min ?? StatsFaker::random();
        $defense_max            = $defense_max ?? StatsFaker::random();
        $b_defense_min          = $b_defense_min ?? BoostFaker::random();
        $b_defense_max          = $b_defense_max ?? BoostFaker::random();
        $hp_min                 = $hp_min ?? StatsFaker::random();
        $hp_max                 = $hp_max ?? StatsFaker::random();
        $b_hp_min               = $b_hp_min ?? BoostFaker::random();
        $b_hp_max               = $b_hp_max ?? BoostFaker::random();
        $sp_attack_min          = $sp_attack_min ?? StatsFaker::random();
        $sp_attack_max          = $sp_attack_max ?? StatsFaker::random();
        $b_sp_attack_min        = $b_sp_attack_min ?? BoostFaker::random();
        $b_sp_attack_max        = $b_sp_attack_max ?? BoostFaker::random();
        $sp_defense_min         = $sp_defense_min ?? StatsFaker::random();
        $sp_defense_max         = $sp_defense_max ?? StatsFaker::random();
        $b_sp_defense_min       = $b_sp_defense_min ?? BoostFaker::random();
        $b_sp_defense_max       = $b_sp_defense_max ?? BoostFaker::random();
        $speed_min              = $speed_min ?? StatsFaker::random();
        $speed_max              = $speed_max ?? StatsFaker::random();
        $b_speed_min            = $b_speed_min ?? BoostFaker::random();
        $b_speed_max            = $b_speed_max ?? BoostFaker::random();
        $farming_min            = $farming_min ?? StatsFaker::random();
        $farming_max            = $farming_max ?? StatsFaker::random();
        $b_farming_min          = $b_farming_min ?? BoostFaker::random();
        $b_farming_max          = $b_farming_max ?? BoostFaker::random();
        $steeling_min           = $steeling_min ?? StatsFaker::random();
        $steeling_max           = $steeling_max ?? StatsFaker::random();
        $b_steeling_min         = $b_steeling_min ?? BoostFaker::random();
        $b_steeling_max         = $b_steeling_max ?? BoostFaker::random();
        $wooding_min            = $wooding_min ?? StatsFaker::random();
        $wooding_max            = $wooding_max ?? StatsFaker::random();
        $b_wooding_min          = $b_wooding_min ?? BoostFaker::random();
        $b_wooding_max          = $b_wooding_max ?? BoostFaker::random();
        $available              = $available ?? true;
        $created_at             = $created_at ?? DateTime::random();
        $updated_at             = $updated_at ?? DateTime::random();
        $created_by             = $created_by ?? FkIdFaker::random();
        $updated_by             = $updated_by ?? FkIdFaker::random();
    }

    public static function fromRequest(AvailableHeroCreateCommand $request): AvailableHero
    {
        return self::create(
            AvailableHeroIdFaker::random(),
            AvailableHeroNameFaker::random(),
            AvailableHeroDescriptionFaker::random(),
            AvailableHeroWorldFaker::random(),
            AvatarFaker::random(),
            AvatarFaker::random(),
            FkIdFaker::random(),
            FkIdFaker::random(),
            FkIdFaker::random(),
            FkIdFaker::random(),
            StatsFaker::random(),
            StatsFaker::random(),
            BoostFaker::random(),
            BoostFaker::random(),
            StatsFaker::random(),
            StatsFaker::random(),
            BoostFaker::random(),
            BoostFaker::random(),
            StatsFaker::random(),
            StatsFaker::random(),
            BoostFaker::random(),
            BoostFaker::random(),
            StatsFaker::random(),
            StatsFaker::random(),
            BoostFaker::random(),
            BoostFaker::random(),
            StatsFaker::random(),
            StatsFaker::random(),
            BoostFaker::random(),
            BoostFaker::random(),
            StatsFaker::random(),
            StatsFaker::random(),
            BoostFaker::random(),
            BoostFaker::random(),
            StatsFaker::random(),
            StatsFaker::random(),
            BoostFaker::random(),
            BoostFaker::random(),
            true,
            DateTime::random(),
            DateTime::random(),
            FkIdFaker::random(),
            FkIdFaker::random(),
        );
    }
}
