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


final class AvailableHero extends AggregateRoot
{
    public function __construct(
        private AvailableHeroId|null $id,
        private AvailableHeroName $name,
        private AvailableHeroDescription $description,
        private AvailableHeroWorld $world,
        private Avatar $avatar,
        private Avatar $avatarBlock,
        private FkId $race_id,
        private FkId $rarity_id,
        private FkId $nature_id,
        private FkId $type_id,
        private Stats $attack_min,
        private Stats $attack_max,
        private Boost $b_attack_min,
        private Boost $b_Battack_max,
        private Stats $defense_min,
        private Stats $defense_max,
        private Boost $b_defense_min,
        private Boost $b_defense_max,
        private Stats $hp_min,
        private Stats $hp_max,
        private Boost $b_hp_min,
        private Boost $b_hp_max,
        private Stats $sp_attack_min,
        private Stats $sp_attack_max,
        private Boost $b_sp_attack_min,
        private Boost $b_sp_attack_max,
        private Stats $sp_defense_min,
        private Stats $sp_defense_max,
        private Boost $b_sp_defense_min,
        private Boost $b_sp_defense_max,
        private Stats $speed_min,
        private Stats $speed_max,
        private Boost $b_speed_min,
        private Boost $b_speed_max,
        private Stats $farming_min,
        private Stats $farming_max,
        private Boost $b_farming_min,
        private Boost $b_farming_max,
        private Stats $steeling_min,
        private Stats $steeling_max,
        private Boost $b_steeling_min,
        private Boost $b_steeling_max,
        private Stats $wooding_min,
        private Stats $wooding_max,
        private Boost $b_wooding_min,
        private Boost $b_wooding_max,
        private int $available,
        private readonly DateTime|null $created_at,
        private readonly DateTime|null $updated_at,
        private readonly UUID|null $created_by,
        private readonly UUID|null $updated_by
    )
    {
    }

    public static function create( 
        AvailableHeroId|null $id,
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
        DateTime|null $created_at,
        DateTime|null $updated_at,
        UUID|null $created_by,
        UUID|null $updated_by
    ): self 
    {
        $availableHero = new AvailableHero();
        
        $availableHero->id;
        $availableHero->name;
        $availableHero->description;
        $availableHero->world;
        $availableHero->avatar;
        $availableHero->avatarBlock;
        $availableHero->race_id;
        $availableHero->rarity_id;
        $availableHero->nature_id;
        $availableHero->type_id;
        $availableHero->attack_min;
        $availableHero->attack_max;
        $availableHero->b_attack_min;
        $availableHero->b_Battack_max;
        $availableHero->defense_min;
        $availableHero->defense_max;
        $availableHero->b_defense_min;
        $availableHero->b_defense_max;
        $availableHero->hp_min;
        $availableHero->hp_max;
        $availableHero->b_hp_min;
        $availableHero->b_hp_max;
        $availableHero->sp_attack_min;
        $availableHero->sp_attack_max;
        $availableHero->b_sp_attack_min;
        $availableHero->b_sp_attack_max;
        $availableHero->sp_defense_min;
        $availableHero->sp_defense_max;
        $availableHero->b_sp_defense_min;
        $availableHero->b_sp_defense_max;
        $availableHero->speed_min;
        $availableHero->speed_max;
        $availableHero->b_speed_min;
        $availableHero->b_speed_max;
        $availableHero->farming_min;
        $availableHero->farming_max;
        $availableHero->b_farming_min;
        $availableHero->b_farming_max;
        $availableHero->steeling_min;
        $availableHero->steeling_max;
        $availableHero->b_steeling_min;
        $availableHero->b_steeling_max;
        $availableHero->wooding_min;
        $availableHero->wooding_max;
        $availableHero->b_wooding_min;
        $availableHero->b_wooding_max;
        $availableHero->available;
        $availableHero->created_at;
        $availableHero->updated_at;
        $availableHero->created_by;
        $availableHero->updated_by;

        return $availableHero;
    }

    public static function fromPrimitive(
        ?int $id,
        string $name,
        string $description,
        string $world,
        string $avatar,
        string $avatarBlock,
        int $race_id,
        int $rarity_id,
        int $nature_id,
        int $type_id,
        int $attack_min,
        int $attack_max,
        int $b_attack_min,
        int $b_Battack_max,
        int $defense_min,
        int $defense_max,
        int $b_defense_min,
        int $b_defense_max,
        int $hp_min,
        int $hp_max,
        int $b_hp_min,
        int $b_hp_max,
        int $sp_attack_min,
        int $sp_attack_max,
        int $b_sp_attack_min,
        int $b_sp_attack_max,
        int $sp_defense_min,
        int $sp_defense_max,
        int $b_sp_defense_min,
        int $b_sp_defense_max,
        int $speed_min,
        int $speed_max,
        int $b_speed_min,
        int $b_speed_max,
        int $farming_min,
        int $farming_max,
        int $b_farming_min,
        int $b_farming_max,
        int $steeling_min,
        int $steeling_max,
        int $b_steeling_min,
        int $b_steeling_max,
        int $wooding_min,
        int $wooding_max,
        int $b_wooding_min,
        int $b_wooding_max,
        int $available,
        ?string $created_at,
        ?string $updated_at,
        ?string $created_by,
        ?string $updated_by,
    ): self
    {
        $availableHero = new AvailableHero();
        
        $availableHero->id                  ?      new AvailableHeroId($id):   null;
        $availableHero->name                =      new AvailableHeroName($name);
        $availableHero->description         =      new AvailableHeroDescription($description);
        $availableHero->world               =      new AvailableHeroWorld($world);
        $availableHero->avatar              =      new Avatar($avatar);
        $availableHero->avatarBlock         =      new Avatar($avatarBlock);
        $availableHero->race_id             =      new FkId($race_id);
        $availableHero->rarity_id           =      new FkId($rarity_id);
        $availableHero->nature_id           =      new FkId($nature_id);
        $availableHero->type_id             =      new FkId($type_id);
        $availableHero->attack_min          =      new Stats($attack_min);
        $availableHero->attack_max          =      new Stats($attack_max);
        $availableHero->b_attack_min        =      new Boost($b_attack_min);
        $availableHero->b_Battack_max       =      new Boost($b_Battack_max);
        $availableHero->defense_min         =      new Stats($defense_min);
        $availableHero->defense_max         =      new Stats($defense_max);
        $availableHero->b_defense_min       =      new Boost($b_defense_min);
        $availableHero->b_defense_max       =      new Boost($b_defense_max);
        $availableHero->hp_min              =      new Stats($hp_min);
        $availableHero->hp_max              =      new Stats($hp_max);
        $availableHero->b_hp_min            =      new Boost($b_hp_min);
        $availableHero->b_hp_max            =      new Boost($b_hp_max);
        $availableHero->sp_attack_min       =      new Stats($sp_attack_min);
        $availableHero->sp_attack_max       =      new Stats($sp_attack_max);
        $availableHero->b_sp_attack_min     =      new Boost($b_sp_attack_min);
        $availableHero->b_sp_attack_max     =      new Boost($b_sp_attack_max);
        $availableHero->sp_defense_min      =      new Stats($sp_defense_min);
        $availableHero->sp_defense_max      =      new Stats($sp_defense_max);
        $availableHero->b_sp_defense_min    =      new Boost($b_sp_defense_min);
        $availableHero->b_sp_defense_max    =      new Boost($b_sp_defense_max);
        $availableHero->speed_min           =      new Stats($speed_min);
        $availableHero->speed_max           =      new Stats($speed_max);
        $availableHero->b_speed_min         =      new Boost($b_speed_min);
        $availableHero->b_speed_max         =      new Boost($b_speed_max);
        $availableHero->farming_min         =      new Stats($farming_min);
        $availableHero->farming_max         =      new Stats($farming_max);
        $availableHero->b_farming_min       =      new Boost($b_farming_min);
        $availableHero->b_farming_max       =      new Boost($b_farming_max);
        $availableHero->steeling_min        =      new Stats($steeling_min);
        $availableHero->steeling_max        =      new Stats($steeling_max);
        $availableHero->b_steeling_min      =      new Boost($b_steeling_min);
        $availableHero->b_steeling_max      =      new Boost($b_steeling_max);
        $availableHero->wooding_min         =      new Stats($wooding_min);
        $availableHero->wooding_max         =      new Stats($wooding_max);
        $availableHero->b_wooding_min       =      new Boost($b_wooding_min);
        $availableHero->b_wooding_max       =      new Boost($b_wooding_max);
        $availableHero->available           =      $available;
        $availableHero->created_at          ?      new DateTime('@' . $created_at)  :   null;
        $availableHero->updated_at          ?      new DateTime('@' . $updated_at)  :   null;
        $availableHero->created_by          ?      new DateTime('@' . $created_by)  :   null;
        $availableHero->updated_by          ?      new DateTime('@' . $updated_by)  :   null;

        return $availableHero;
    }


    //todos los getters y setters excepto los readOnly
    public function id(): ?AvailableHeroId
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

    public function createdAt(): ?DateTime
    {
        return $this->created_at;
    }

    public function updatedAt(): ?DateTime
    {
        return $this->updated_at;
    }

    public function createdBy(): ?UUID
    {
        return $this->created_by;
    }

    public function updatedBy(): ?UUID
    {
        return $this->updated_by;
    }
}