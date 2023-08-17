<?php

declare(strict_types=1);

namespace api\Core\AvailableHeroes\Domain;

use api\core\AvailableHeroes\Domain\ValueObjects\AvailableHeroId;
use api\core\AvailableHeroes\Domain\ValueObjects\AvailableHeroName;
use api\core\AvailableHeroes\Domain\ValueObjects\AvailableHeroWorld;
use api\core\AvailableHeroes\Domain\ValueObjects\AvailableHeroDescription;
use api\Shared\Domain\ValueObject\Avatar;
use api\Shared\Domain\ValueObject\Boost;
use api\Shared\Domain\ValueObject\Stats;
use api\Shared\Domain\ValueObject\FkId;
use api\Shared\Domain\ValueObject\UUID;
use api\Shared\Domain\Aggregate\AggregateRoot;
use DateTime;


final class AvailableHero //extends AggregateRoot
{
    public function __construct(
        private AvailableHeroId $id,
        private AvailableHeroName $name,
        private AvailableHeroDescription $description,
        private AvailableHeroWorld $world,
        private Avatar $avatar,
        private Avatar $avatarBlock,//
        private FkId $race_id,
        private FkId $rarity_id,
        private FkId $nature_id,
        private FkId $type_id,
        private Stats $attack_min,
        private Stats $attack_max,
        private Boost $b_attack_min,
        private Boost $b_Battack_max,//
        private Stats $defense_min,
        private Stats $defense_max,
        private Boost $b_defense_min,
        private Boost $b_defense_max,//
        private Stats $hp_min,
        private Stats $hp_max,
        private Boost $b_hp_min,
        private Boost $b_hp_max,//
        private Stats $sp_attack_min,
        private Stats $sp_attack_max,
        private Boost $b_sp_attack_min,
        private Boost $b_sp_attack_max,//
        private Stats $sp_defense_min,
        private Stats $sp_defense_max,
        private Boost $b_sp_defense_min,
        private Boost $b_sp_defense_max,//
        private Stats $speed_min,
        private Stats $speed_max,
        private Boost $b_speed_min,
        private Boost $b_speed_max,//
        private Stats $farming_min,
        private Stats $farming_max,
        private Boost $b_farming_min,
        private Boost $b_farming_max,//
        private Stats $steeling_min,
        private Stats $steeling_max,
        private Boost $b_steeling_min,
        private Boost $b_steeling_max,//
        private Stats $wooding_min,
        private Stats $wooding_max,
        private Boost $b_wooding_min,
        private Boost $b_wooding_max,
        private int $available,
        private readonly DateTime $created_at,
        private readonly DateTime $updated_at,
        private readonly UUID $created_by,
        private readonly UUID $updated_by
    ){
    
    }

    public static function create( 
        AvailableHeroId $id,
        AvailableHeroName $name,
        AvailableHeroDescription $description,
        AvailableHeroWorld $world,
        Avatar $avatar,
        Avatar $avatarBlock,
        FkId $race_id,
        FkId $rarity_id,
        FkId $nature_id,
        FkId $type_id,
        Stats $attack_min,
        Stats $attack_max,
        Boost $b_attack_min,
        Boost $b_Battack_max,
        Stats $defense_min,
        Stats $defense_max,
        Boost $b_defense_min,
        Boost $b_defense_max,
        Stats $hp_min,
        Stats $hp_max,
        Boost $b_hp_min,
        Boost $b_hp_max,
        Stats $sp_attack_min,
        Stats $sp_attack_max,
        Boost $b_sp_attack_min,
        Boost $b_sp_attack_max,
        Stats $sp_defense_min,
        Stats $sp_defense_max,
        Boost $b_sp_defense_min,
        Boost $b_sp_defense_max,
        Stats $speed_min,
        Stats $speed_max,
        Boost $b_speed_min,
        Boost $b_speed_max,
        Stats $farming_min,
        Stats $farming_max,
        Boost $b_farming_min,
        Boost $b_farming_max,
        Stats $steeling_min,
        Stats $steeling_max,
        Boost $b_steeling_min,
        Boost $b_steeling_max,
        Stats $wooding_min,
        Stats $wooding_max,
        Boost $b_wooding_min,
        Boost $b_wooding_max,
        int $available,
        DateTime $created_at,
        DateTime $updated_at,
        UUID $created_by,
        UUID $updated_by
    ): self {
        $availableHero = new self(
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

        /*$availableHero->record(
            new AvailableHeroCreatedDomainEvent(
                $id->value(),
                $name->value(),
                $description->value(),
                $world->value(),
                $avatar->value(),
                $avatarBlock->value(),
                $race_id->value(),
                $rarity_id->value(),
                $nature_id->value(),
                $type_id->value(),
                $attack_min->value(),
                $attack_max->value(),
                $b_attack_min->value(),
                $b_Battack_max->value(),
                $defense_min->value(),
                $defense_max->value(),
                $b_defense_min->value(),
                $b_defense_max->value(),
                $hp_min->value(),
                $hp_max->value(),
                $b_hp_min->value(),
                $b_hp_max->value(),
                $sp_attack_min->value(),
                $sp_attack_max->value(),
                $b_sp_attack_min->value(),
                $b_sp_attack_max->value(),
                $sp_defense_min->value(),
                $sp_defense_max->value(),
                $b_sp_defense_min->value(),
                $b_sp_defense_max->value(),
                $speed_min->value(),
                $speed_max->value(),
                $b_speed_min->value(),
                $b_speed_max->value(),
                $farming_min->value(),
                $farming_max->value(),
                $b_farming_min->value(),
                $b_farming_max->value(),
                $steeling_min->value(),
                $steeling_max->value(),
                $b_steeling_min->value(),
                $b_steeling_max->value(),
                $wooding_min->value(),
                $wooding_max->value(),
                $b_wooding_min->value(),
                $b_wooding_max->value(),
                $available,
                $created_at,
                $updated_at,
                $created_by->value(),
                $updated_by->value()
                )
            );*/
        return $availableHero;
    }

    //todos los getters y setters excepto los readOnly
    public function id(): AvailableHeroId
    {
        return $this->id;
    }

    public function name(): AvailableHeroName
    {
        return $this->name;
    }

    public function description(): AvailableHeroDescription
    {
        return $this->description;
    }

    public function world(): AvailableHeroWorld
    {
        return $this->world;
    }

    public function avatar(): Avatar
    {
        return $this->avatar;
    }

    public function avatarBlock(): Avatar
    {
        return $this->avatarBlock;
    }

    public function raceId(): FkId
    {
        return $this->race_id;
    }

    public function rarityId(): FkId
    {
        return $this->rarity_id;
    }

    public function natureId(): FkId
    {
        return $this->nature_id;
    }

    public function typeId(): FkId
    {
        return $this->type_id;
    }

    public function attackMin(): Stats
    {
        return $this->attack_min;
    }

    public function attackMax(): Stats
    {
        return $this->attack_max;
    }

    public function bAttackMin(): Boost
    {
        return $this->b_attack_min;
    }

    public function bAttackMax(): Boost
    {
        return $this->b_Battack_max;
    }

    public function defenseMin(): Stats
    {
        return $this->defense_min;
    }

    public function defenseMax(): Stats
    {
        return $this->defense_max;
    }

    public function bDefenseMin(): Boost
    {
        return $this->b_defense_min;
    }

    public function bDefenseMax(): Boost
    {
        return $this->b_defense_max;
    }

    public function hpMin(): Stats
    {
        return $this->hp_min;
    }

    public function hpMax(): Stats
    {
        return $this->hp_max;
    }

    public function bHpMin(): Boost
    {
        return $this->b_hp_min;
    }

    public function bHpMax(): Boost
    {
        return $this->b_hp_max;
    }

    public function spAttackMin(): Stats
    {
        return $this->sp_attack_min;
    }

    public function spAttackMax(): Stats
    {
        return $this->sp_attack_max;
    }

    public function bSpAttackMin(): Boost
    {
        return $this->b_sp_attack_min;
    }

    public function bSpAttackMax(): Boost
    {
        return $this->b_sp_attack_max;
    }

    public function spDefenseMin(): Stats
    {
        return $this->sp_defense_min;
    }

    public function spDefenseMax(): Stats
    {
        return $this->sp_defense_max;
    }

    public function bSpDefenseMin(): Boost
    {
        return $this->b_sp_defense_min;
    }

    public function bSpDefenseMax(): Boost
    {
        return $this->b_sp_defense_max;
    }

    public function speedMin(): Stats
    {
        return $this->speed_min;
    }

    public function speedMax(): Stats
    {
        return $this->speed_max;
    }

    public function bSpeedMin(): Boost
    {
        return $this->b_speed_min;
    }

    public function bSpeedMax(): Boost
    {
        return $this->b_speed_max;
    }

    public function farmingMin(): Stats
    {
        return $this->farming_min;
    }

    public function farmingMax(): Stats
    {
        return $this->farming_max;
    }

    public function bFarmingMin(): Boost
    {
        return $this->b_farming_min;
    }

    public function bFarmingMax(): Boost
    {
        return $this->b_farming_max;
    }

    public function steelingMin(): Stats
    {
        return $this->steeling_min;
    }

    public function steelingMax(): Stats
    {
        return $this->steeling_max;
    }

    public function bSteelingMin(): Boost
    {
        return $this->b_steeling_min;
    }

    public function bSteelingMax(): Boost
    {
        return $this->b_steeling_max;
    }

    public function woodingMin(): Stats
    {
        return $this->wooding_min;
    }

    public function woodingMax(): Stats
    {
        return $this->wooding_max;
    }

    public function bWoodingMin(): Boost
    {
        return $this->b_wooding_min;
    }

    public function bWoodingMax(): Boost
    {
        return $this->b_wooding_max;
    }

    public function available(): int
    {
        return $this->available;
    }

    public function createdAt(): DateTime
    {
        return $this->created_at;
    }

    public function updatedAt(): DateTime
    {
        return $this->updated_at;
    }

    public function createdBy(): UUID
    {
        return $this->created_by;
    }

    public function updatedBy(): UUID
    {
        return $this->updated_by;
    }

    public function setName(AvailableHeroName $name): void
    {
        $this->name = $name;
    }

    public function setDescription(AvailableHeroDescription $description): void
    {
        $this->description = $description;
    }

    public function setWorld(AvailableHeroWorld $world): void
    {
        $this->world = $world;
    }

    public function setAvatar(Avatar $avatar): void
    {
        $this->avatar = $avatar;
    }

    public function setAvatarBlock(Avatar $avatarBlock): void
    {
        $this->avatarBlock = $avatarBlock;
    }

    public function setRaceId(FkId $race_id): void
    {
        $this->race_id = $race_id;
    }

    public function setRarityId(FkId $rarity_id): void
    {
        $this->rarity_id = $rarity_id;
    }

    public function setNatureId(FkId $nature_id): void
    {
        $this->nature_id = $nature_id;
    }

    public function setTypeId(FkId $type_id): void
    {
        $this->type_id = $type_id;
    }

    public function setAttackMin(Stats $attack_min): void
    {
        $this->attack_min = $attack_min;
    }

    public function setAttackMax(Stats $attack_max): void
    {
        $this->attack_max = $attack_max;
    }

    public function setBAttackMin(Boost $b_attack_min): void
    {
        $this->b_attack_min = $b_attack_min;
    }

    public function setBAttackMax(Boost $b_attack_max): void
    {
        $this->b_attack_max = $b_attack_max;
    }

    public function setDefenseMin(Stats $defense_min): void
    {
        $this->defense_min = $defense_min;
    }

    public function setDefenseMax(Stats $defense_max): void
    {
        $this->defense_max = $defense_max;
    }

    public function setBDefenseMin(Boost $b_defense_min): void
    {
        $this->b_defense_min = $b_defense_min;
    }

    public function setBDefenseMax(Boost $b_defense_max): void
    {
        $this->b_defense_max = $b_defense_max;
    }

    public function setHpMin(Stats $hp_min): void
    {
        $this->hp_min = $hp_min;
    }

    public function setHpMax(Stats $hp_max): void
    {
        $this->hp_max = $hp_max;
    }

    public function setBHpMin(Boost $b_hp_min): void
    {
        $this->b_hp_min = $b_hp_min;
    }

    public function setBHpMax(Boost $b_hp_max): void
    {
        $this->b_hp_max = $b_hp_max;
    }

    public function setSpAttackMin(Stats $sp_attack_min): void
    {
        $this->sp_attack_min = $sp_attack_min;
    }

    public function setSpAttackMax(Stats $sp_attack_max): void
    {
        $this->sp_attack_max = $sp_attack_max;
    }

    public function setBSpAttackMin(Boost $b_sp_attack_min): void
    {
        $this->b_sp_attack_min = $b_sp_attack_min;
    }

    public function setBSpAttackMax(Boost $b_sp_attack_max): void
    {
        $this->b_sp_attack_max = $b_sp_attack_max;
    }

    public function setSpDefenseMin(Stats $sp_defense_min): void
    {
        $this->sp_defense_min = $sp_defense_min;
    }

    public function setSpDefenseMax(Stats $sp_defense_max): void
    {
        $this->sp_defense_max = $sp_defense_max;
    }

    public function setBSpDefenseMin(Boost $b_sp_defense_min): void
    {
        $this->b_sp_defense_min = $b_sp_defense_min;
    }

    public function setBSpDefenseMax(Boost $b_sp_defense_max): void
    {
        $this->b_sp_defense_max = $b_sp_defense_max;
    }

    public function setSpeedMin(Stats $speed_min): void
    {
        $this->speed_min = $speed_min;
    }

    public function setSpeedMax(Stats $speed_max): void
    {
        $this->speed_max = $speed_max;
    }

    public function setBSpeedMin(Boost $b_speed_min): void
    {
        $this->b_speed_min = $b_speed_min;
    }

    public function setBSpeedMax(Boost $b_speed_max): void
    {
        $this->b_speed_max = $b_speed_max;
    }

    public function setFarmingMin(Stats $farming_min): void
    {
        $this->farming_min = $farming_min;
    }

    public function setFarmingMax(Stats $farming_max): void
    {
        $this->farming_max = $farming_max;
    }

    public function setBFarmingMin(Boost $b_farming_min): void
    {
        $this->b_farming_min = $b_farming_min;
    }

    public function setBFarmingMax(Boost $b_farming_max): void
    {
        $this->b_farming_max = $b_farming_max;
    }

    public function setSteelingMin(Stats $steeling_min): void
    {
        $this->steeling_min = $steeling_min;
    }

    public function setSteelingMax(Stats $steeling_max): void
    {
        $this->steeling_max = $steeling_max;
    }

    public function setBSteelingMin(Boost $b_steeling_min): void
    {
        $this->b_steeling_min = $b_steeling_min;
    }

    public function setBSteelingMax(Boost $b_steeling_max): void
    {
        $this->b_steeling_max = $b_steeling_max;
    }

    public function setWoodingMin(Stats $wooding_min): void
    {
        $this->wooding_min = $wooding_min;
    }

    public function setWoodingMax(Stats $wooding_max): void
    {
        $this->wooding_max = $wooding_max;
    }

    public function setBWoodingMin(Boost $b_wooding_min): void
    {
        $this->b_wooding_min = $b_wooding_min;
    }

    public function setBWoodingMax(Boost $b_wooding_max): void
    {
        $this->b_wooding_max = $b_wooding_max;
    }
    
}