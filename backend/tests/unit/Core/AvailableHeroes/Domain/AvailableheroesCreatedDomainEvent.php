<?php

declare (strict_types=1);   

namespace backend\tests\unit\Core\AvailableHeroes\Domain;

use App\Core\AvailableHeroes\Domain\AvailableHero;
use App\Core\AvailableHeroes\Domain\AvailableHeroCreatedDomainEvent;
use App\Core\AvailableHeroes\Domain\AvailableHeroDescription;
use App\Core\AvailableHeroes\Domain\AvailableHeroId;
use App\Core\AvailableHeroes\Domain\AvailableHeroName;
use App\Core\AvailableHeroes\Domain\AvailableHeroWorld;
use App\Core\AvailableHeroes\Domain\Avatar;
use App\Core\AvailableHeroes\Domain\AvatarBlock;
use App\Core\AvailableHeroes\Domain\Boost;
use App\Core\AvailableHeroes\Domain\FkId;
use App\Core\AvailableHeroes\Domain\Stats;
use App\Core\Shared\Domain\DateTimeImmutableValueObject;
use App\Core\Shared\Domain\ValueObjects\DateTimeValueObject;

final class AvailableheroesCreatedDomainEvent
{
    public static function create(
        ?AvailableHeroId                 $id = null,
        ?AvailableHeroName               $name = null,
        ?AvailableHeroDescription        $description = null,
        ?AvailableHeroWorld              $world = null,
        ?Avatar                          $avatar = null,
        ?AvatarBlock                     $avatarBlock = null,
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
        ?DateTimeImmutableValueObject    $created_at = null,
        ?DateTimeImmutableValueObject    $updated_at = null,
        ?FkId                            $created_by = null,
        ?FkId                            $updated_by = null,
    ): AvailableHeroCreatedDomainEvent{
        return new AvailableHeroCreatedDomainEvent(
            $id->value ?? AvailableHeroIdFaker::random()->value(),
            $name->value ?? AvailableHeroNameFaker::random()->value(),
            $description->value ?? AvailableHeroDescriptionFaker::random()->value(),
            $world->value ?? AvailableHeroWorldFaker::random()->value(),
            $avatar->value ?? AvatarFaker::random()->value(),
            $avatarBlock->value ?? AvatarFaker::random()->value(),
            $race_id->value ?? FkIdFaker::random()->value(),
            $rarity_id->value ?? FkIdFaker::random()->value(),
            $nature_id->value ?? FkIdFaker::random()->value(),
            $type_id->value ?? FkIdFaker::random()->value(),
            $attack_min->value ?? StatsFaker::random()->value(),
            $attack_max->value ?? StatsFaker::random()->value(),
            $b_attack_min->value ?? BoostFaker::random()->value(),
            $b_attack_max->value ?? BoostFaker::random()->value(),
            $defense_min->value ?? StatsFaker::random()->value(),
            $defense_max->value ?? StatsFaker::random()->value(),
            $b_defense_min->value ?? BoostFaker::random()->value(),
            $b_defense_max->value ?? BoostFaker::random()->value(),
            $hp_min->value ?? StatsFaker::random()->value(),
            $hp_max->value ?? StatsFaker::random()->value(),
            $b_hp_min->value ?? BoostFaker::random()->value(),
            $b_hp_max->value ?? BoostFaker::random()->value(),
            $sp_attack_min->value ?? StatsFaker::random()->value(),
            $sp_attack_max->value ?? StatsFaker::random()->value(),
            $b_sp_attack_min->value ?? BoostFaker::random()->value(),
            $b_sp_attack_max->value ?? BoostFaker::random()->value(),
            $sp_defense_min->value ?? StatsFaker::random()->value(),
            $sp_defense_max->value ?? StatsFaker::random()->value(),
            $b_sp_defense_min->value ?? BoostFaker::random()->value(),
            $b_sp_defense_max->value ?? BoostFaker::random()->value(),
            $speed_min->value ?? StatsFaker::random()->value(),
            $speed_max->value ?? StatsFaker::random()->value(),
            $b_speed_min->value ?? BoostFaker::random()->value(),
            $b_speed_max->value ?? BoostFaker::random()->value(),
            $farming_min->value ?? StatsFaker::random()->value(),
            $farming_max->value ?? StatsFaker::random()->value(),
            $b_farming_min->value ?? BoostFaker::random()->value(),
            $b_farming_max->value ?? BoostFaker::random()->value(),
            $steeling_min->value ?? StatsFaker::random()->value(),
            $steeling_max->value ?? StatsFaker::random()->value(),
            $b_steeling_min->value ?? BoostFaker::random()->value(),
            $b_steeling_max->value ?? BoostFaker::random()->value(),
            $wooding_min->value ?? StatsFaker::random()->value(),
            $wooding_max->value ?? StatsFaker::random()->value(),
            $b_wooding_min->value ?? BoostFaker::random()->value(),
            $b_wooding_max->value ?? BoostFaker::random()->value(),
            $created_at->value ?? DateTimeValueObject::now()->value(),
            $updated_at->value ?? DateTimeValueObject::now()->value(),
            $created_by->value ?? FkIdFaker::random()->value(),
            $updated_by->value ?? FkIdFaker::random()->value()
        );
    }

    public static function fromAvailableHeroes(AvailableHeroes $availableHeroes): AvailableHeroesCreatedDomainEvent
    {
        return self::create(
            $id = $availableHeroes->id(),
            $name = $availableHeroes->name(),
            $description = $availableHeroes->description(),
            $world = $availableHeroes->world(),
            $avatar = $availableHeroes->avatar(),
            $avatarBlock = $availableHeroes->avatarBlock(),
            $race_id = $availableHeroes->race_id(),
            $rarity_id = $availableHeroes->rarity_id(),
            $nature_id = $availableHeroes->nature_id(),
            $type_id = $availableHeroes->type_id(),
            $attack_min = $availableHeroes->attack_min(),
            $attack_max = $availableHeroes->attack_max(),
            $b_attack_min = $availableHeroes->b_attack_min(),
            $b_attack_max = $availableHeroes->b_attack_max(),
            $defense_min = $availableHeroes->defense_min(),
            $defense_max = $availableHeroes->defense_max(),
            $b_defense_min = $availableHeroes->b_defense_min(),
            $b_defense_max = $availableHeroes->b_defense_max(),
            $hp_min = $availableHeroes->hp_min(),
            $hp_max = $availableHeroes->hp_max(),
            $b_hp_min = $availableHeroes->b_hp_min(),
            $b_hp_max = $availableHeroes->b_hp_max(),
            $sp_attack_min = $availableHeroes->sp_attack_min(),
            $sp_attack_max = $availableHeroes->sp_attack_max(),
            $b_sp_attack_min = $availableHeroes->b_sp_attack_min(),
            $b_sp_attack_max = $availableHeroes->b_sp_attack_max(),
            $sp_defense_min = $availableHeroes->sp_defense_min(),
            $sp_defense_max = $availableHeroes->sp_defense_max(),
            $b_sp_defense_min = $availableHeroes->b_sp_defense_min(),
            $b_sp_defense_max = $availableHeroes->b_sp_defense_max(),
            $speed_min = $availableHeroes->speed_min(),
            $speed_max = $availableHeroes->speed_max(),
            $b_speed_min = $availableHeroes->b_speed_min(),
            $b_speed_max = $availableHeroes->b_speed_max(),
            $farming_min = $availableHeroes->farming_min(),
            $farming_max = $availableHeroes->farming_max(),
            $b_farming_min = $availableHeroes->b_farming_min(),
            $b_farming_max = $availableHeroes->b_farming_max(),
            $steeling_min = $availableHeroes->steeling_min(),
            $steeling_max = $availableHeroes->steeling_max(),
            $b_steeling_min = $availableHeroes->b_steeling_min(),
            $b_steeling_max = $availableHeroes->b_steeling_max(),
            $wooding_min = $availableHeroes->wooding_min(),
            $wooding_max = $availableHeroes->wooding_max(),
            $b_wooding_min = $availableHeroes->b_wooding_min(),
            $b_wooding_max = $availableHeroes->b_wooding_max(),
            $created_at = $availableHeroes->created_at(),
            $updated_at = $availableHeroes->updated_at(),
            $created_by = $availableHeroes->created_by(),
            $updated_by = $availableHeroes->updated_by()

        )
    }
}