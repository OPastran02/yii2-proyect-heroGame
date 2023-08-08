<?php

declare(strict_types=1);

namespace api\Core\AvailableHeroes\Domain;

use api\Shared\Domain\Bus\Event\DomainEvent;
use DateTime;

final class AvailableHeroCreatedDomainEvent extends DomainEvent
{

    public function __construct(
        int $id,
        private readonly string $name,
        private readonly string $description,
        private readonly string $world,
        private readonly string $avatar,
        private readonly string $avatarBlock,
        private readonly int $race_id,
        private readonly int $rarity_id,
        private readonly int $nature_id,
        private readonly int $type_id,
        private readonly int $attack_min,
        private readonly int $attack_max,
        private readonly int $b_attack_min,
        private readonly int $b_attack_max,
        private readonly int $defense_min,
        private readonly int $defense_max,
        private readonly int $b_defense_min,
        private readonly int $b_defense_max,
        private readonly int $hp_min,
        private readonly int $hp_max,
        private readonly int $b_hp_min,
        private readonly int $b_hp_max,
        private readonly int $sp_attack_min,
        private readonly int $sp_attack_max,
        private readonly int $b_sp_attack_min,
        private readonly int $b_sp_attack_max,
        private readonly int $sp_defense_min,
        private readonly int $sp_defense_max,
        private readonly int $b_sp_defense_min,
        private readonly int $b_sp_defense_max,
        private readonly int $speed_min,
        private readonly int $speed_max,
        private readonly int $b_speed_min,
        private readonly int $b_speed_max,
        private readonly int $farming_min,
        private readonly int $farming_max,
        private readonly int $b_farming_min,
        private readonly int $b_farming_max,
        private readonly int $steeling_min,
        private readonly int $steeling_max,
        private readonly int $b_steeling_min,
        private readonly int $b_steeling_max,
        private readonly int $wooding_min,
        private readonly int $wooding_max,
        private readonly int $b_wooding_min,
        private readonly int $b_wooding_max,
        private readonly bool $available,
        private readonly DateTime $created_at,
        private readonly DateTime $updated_at,
        private readonly string $created_by,
        private readonly string $updated_by,
        string $eventId = null,
        string $occurredOn = null
    ) {
        parent::__construct($id, $eventId, $occurredOn);
    }

    public static function eventName(): string
    {
        return 'available_hero.created';
    }

    public static function fromPrimitives(
        int $aggregateId,
        array $body,
        string $eventId,
        string $occurredOn
    ): DomainEvent {
        return new self(
            $aggregateId,
            $body['name'],
            $body['description'],
            $body['world'],
            $body['avatar'],
            $body['avatar_block'],
            $body['race_id'],
            $body['rarity_id'],
            $body['nature_id'],
            $body['type_id'],
            $body['attack_min'],
            $body['attack_max'],
            $body['b_attack_min'],
            $body['b_attack_max'],
            $body['defense_min'],
            $body['defense_max'],
            $body['b_defense_min'],
            $body['b_defense_max'],
            $body['hp_min'],
            $body['hp_max'],
            $body['b_hp_min'],
            $body['b_hp_max'],
            $body['sp_attack_min'],
            $body['sp_attack_max'],
            $body['b_sp_attack_min'],
            $body['b_sp_attack_max'],
            $body['sp_defense_min'],
            $body['sp_defense_max'],
            $body['b_sp_defense_min'],
            $body['b_sp_defense_max'],
            $body['speed_min'],
            $body['speed_max'],
            $body['b_speed_min'],
            $body['b_speed_max'],
            $body['farming_min'],
            $body['farming_max'],
            $body['b_farming_min'],
            $body['b_farming_max'],
            $body['steeling_min'],
            $body['steeling_max'],
            $body['b_steeling_min'],
            $body['b_steeling_max'],
            $body['wooding_min'],
            $body['wooding_max'],
            $body['b_wooding_min'],
            $body['b_wooding_max'],
            $body['available'],
            $body['created_at'],
            $body['updated_at'],
            $body['created_by'],
            $body['updated_by'],
            $eventId,
            $occurredOn
        );
    }

    public function toPrimitives(): array
    {
        return[
            'name'               =>  $this->name,         
            'description'        =>  $this->description,                 
            'world'              =>  $this->world,         
            'avatar'             =>  $this->avatar,             
            'avatar_block'       =>  $this->avatar_block,                 
            'race_id'            =>  $this->race_id,             
            'rarity_id'          =>  $this->rarity_id,             
            'nature_id'          =>  $this->nature_id,             
            'type_id'            =>  $this->type_id,             
            'attack_min'         =>  $this->attack_min,                 
            'attack_max'         =>  $this->attack_max,                 
            'b_attack_min'       =>  $this->b_attack_min,                 
            'b_attack_max'       =>  $this->b_attack_max,                 
            'defense_min'        =>  $this->defense_min,                 
            'defense_max'        =>  $this->defense_max,                 
            'b_defense_min'      =>  $this->b_defense_min,                 
            'b_defense_max'      =>  $this->b_defense_max,                 
            'hp_min'             =>  $this->hp_min,             
            'hp_max'             =>  $this->hp_max,             
            'b_hp_min'           =>  $this->b_hp_min,             
            'b_hp_max'           =>  $this->b_hp_max,             
            'sp_attack_min'      =>  $this->sp_attack_min,                 
            'sp_attack_max'      =>  $this->sp_attack_max,                 
            'b_sp_attack_min'    =>  $this->b_sp_attack_min,                     
            'b_sp_attack_max'    =>  $this->b_sp_attack_max,                     
            'sp_defense_min'     =>  $this->sp_defense_min,                     
            'sp_defense_max'     =>  $this->sp_defense_max,                     
            'b_sp_defense_min'   =>  $this->b_sp_defense_min,                     
            'b_sp_defense_max'   =>  $this->b_sp_defense_max,                     
            'speed_min'          =>  $this->speed_min,             
            'speed_max'          =>  $this->speed_max,             
            'b_speed_min'        =>  $this->b_speed_min,                 
            'b_speed_max'        =>  $this->b_speed_max,                 
            'farming_min'        =>  $this->farming_min,                 
            'farming_max'        =>  $this->farming_max,                 
            'b_farming_min'      =>  $this->b_farming_min,                 
            'b_farming_max'      =>  $this->b_farming_max,                 
            'steeling_min'       =>  $this->steeling_min,                 
            'steeling_max'       =>  $this->steeling_max,                 
            'b_steeling_min'     =>  $this->b_steeling_min,                     
            'b_steeling_max'     =>  $this->b_steeling_max,                     
            'wooding_min'        =>  $this->wooding_min,                 
            'wooding_max'        =>  $this->wooding_max,                 
            'b_wooding_min'      =>  $this->b_wooding_min,                 
            'b_wooding_max'      =>  $this->b_wooding_max,                 
            'available'          =>  $this->available,
            'created_at'         =>  $this->created_at,                 
            'updated_at'         =>  $this->updated_at,                 
            'created_by'         =>  $this->created_by,                 
            'updated_by'         =>  $this->updated_by                 
        ];
    }
    
    public function id(): string
    {
        return $this->name;
    }

    public function description(): string
    {
        return $this->description;
    }

    public function world(): string
    {
        return $this->world;
    }

    public function avatar(): string
    {
        return $this->avatar;
    }

    public function avatarBlock(): string
    {
        return $this->avatarBlock;
    }

    public function rarityId(): string
    {
        return $this->rarityId;
    }

    public function natureId(): string
    {
        return $this->natureId;
    }

    public function typeId(): string
    {
        return $this->typeId;
    }

    public function attackMin(): string
    {
        return $this->attackMin;
    }

    public function attackMax(): string
    {
        return $this->attackMax;
    }

    public function bAttackMin(): string
    {
        return $this->bAttackMin;
    }

    public function bAttackMax(): string
    {
        return $this->bAttackMax;
    }

    public function defenseMin(): string
    {
        return $this->defenseMin;
    }

    public function defenseMax(): string
    {
        return $this->defenseMax;
    }

    public function bDefenseMin(): string
    {
        return $this->bDefenseMin;
    }

    public function bDefenseMax(): string
    {
        return $this->bDefenseMax;
    }

    public function hpMin(): string
    {
        return $this->hpMin;
    }

    public function hpMax(): string
    {
        return $this->hpMax;
    }

    public function bHpMin(): string
    {
        return $this->bHpMin;
    }

    public function bHpMax(): string
    {
        return $this->bHpMax;
    }

    public function spAttackMin(): string
    {
        return $this->spAttackMin;
    }

    public function spAttackMax(): string
    {
        return $this->spAttackMax;
    }

    public function bSpAttackMin(): string
    {
        return $this->bSpAttackMin;
    }

    public function bSpAttackMax(): string
    {
        return $this->bSpAttackMax;
    }

    public function spDefenseMin(): string
    {
        return $this->spDefenseMin;
    }

    public function spDefenseMax(): string
    {
        return $this->spDefenseMax;
    }

    public function bSpDefenseMin(): string
    {
        return $this->bSpDefenseMin;
    }

    public function bSpDefenseMax(): string
    {
        return $this->bSpDefenseMax;
    }

    public function speedMin(): string
    {
        return $this->speedMin;
    }

    public function speedMax(): string
    {
        return $this->speedMax;
    }

    public function bSpeedMin(): string
    {
        return $this->bSpeedMin;
    }

    public function bSpeedMax(): string
    {
        return $this->bSpeedMax;
    }

    public function farmingMin(): string
    {
        return $this->farmingMin;
    }

    public function farmingMax(): string
    {
        return $this->farmingMax;
    }

    public function bFarmingMin(): string
    {
        return $this->bFarmingMin;
    }

    public function bFarmingMax(): string
    {
        return $this->bFarmingMax;
    }

    public function steelingMin(): string
    {
        return $this->steelingMin;
    }

    public function steelingMax(): string
    {
        return $this->steelingMax;
    }

    public function bSteelingMin(): string
    {
        return $this->bSteelingMin;
    }

    public function bSteelingMax(): string
    {
        return $this->bSteelingMax;
    }

    public function woodingMin(): string
    {
        return $this->woodingMin;
    }

    public function woodingMax(): string
    {
        return $this->woodingMax;
    }

    public function bWoodingMin(): string
    {
        return $this->bWoodingMin;
    }

    public function bWoodingMax(): string
    {
        return $this->bWoodingMax;
    }

    public function available(): string
    {
        return $this->available;
    }

    public function createdAt(): string
    {
        return $this->createdAt;
    }

    public function updatedAt(): string
    {
        return $this->updatedAt;
    }

    public function createdBy(): string
    {
        return $this->createdBy;
    }

    public function updatedBy(): string
    {
        return $this->updatedBy;
    }

}