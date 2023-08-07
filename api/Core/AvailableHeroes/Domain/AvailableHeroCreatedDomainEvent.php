<?php

declare(strict_types=1);

namespace api\Core\AvailableHeroes\Domain;

use api\Shared\Domain\Bus\Event\DomainEvent;

final class AvailableHeroCreatedDomainEvent extends DomainEvent
{
    public function __construct(
        string $aggregateId,
        private readonly string $name,
        private readonly string $description,
        private readonly string $world,
        private readonly string $avatar,
        private readonly string $avatarBlock,
        private readonly string $race_id,
        private readonly string $rarity_id,
        private readonly string $nature_id,
        private readonly string $type_id,
        private readonly string $attack_min,
        private readonly string $attack_max,
        private readonly string $b_attack_min,
        private readonly string $b_attack_max,
        private readonly string $defense_min,
        private readonly string $defense_max,
        private readonly string $b_defense_min,
        private readonly string $b_defense_max,
        private readonly string $hp_min,
        private readonly string $hp_max,
        private readonly string $b_hp_min,
        private readonly string $b_hp_max,
        private readonly string $sp_attack_min,
        private readonly string $sp_attack_max,
        private readonly string $b_sp_attack_min,
        private readonly string $b_sp_attack_max,
        private readonly string $sp_defense_min,
        private readonly string $sp_defense_max,
        private readonly string $b_sp_defense_min,
        private readonly string $b_sp_defense_max,
        private readonly string $speed_min,
        private readonly string $speed_max,
        private readonly string $b_speed_min,
        private readonly string $b_speed_max,
        private readonly string $farming_min,
        private readonly string $farming_max,
        private readonly string $b_farming_min,
        private readonly string $b_farming_max,
        private readonly string $steeling_min,
        private readonly string $steeling_max,
        private readonly string $b_steeling_min,
        private readonly string $b_steeling_max,
        private readonly string $wooding_min,
        private readonly string $wooding_max,
        private readonly string $b_wooding_min,
        private readonly string $b_wooding_max,
        private readonly string $created_at,
        private readonly string $updated_at,
        private readonly string $created_by,
        private readonly string $updated_by,
        string $eventId = null,
        string $occurredOn = null
    ) {
        parent::__construct($aggregateId, $eventId, $occurredOn);
    }
    
    public static function fromPrimitives(
        string $aggregateId,
        array $body,
        string $eventId = null,
        string $occurredOn = null
    ): AvailableHeroesCreatedDomainEvent {
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
            $body['created_at'],
            $body['updated_at'],
            $body['created_by'],
            $body['updated_by'],
            $eventId,
            $occurredOn
        );

        public function toPrimitives(): array
        {
            return[
                'name'               =>  $this->name         
                'description'        =>  $this->description                 
                'world'              =>  $this->world         
                'avatar'             =>  $this->avatar             
                'avatar_block'       =>  $this->avatar_block                 
                'race_id'            =>  $this->race_id             
                'rarity_id'          =>  $this->rarity_id             
                'nature_id'          =>  $this->nature_id             
                'type_id'            =>  $this->type_id             
                'attack_min'         =>  $this->attack_min                 
                'attack_max'         =>  $this->attack_max                 
                'b_attack_min'       =>  $this->b_attack_min                 
                'b_attack_max'       =>  $this->b_attack_max                 
                'defense_min'        =>  $this->defense_min                 
                'defense_max'        =>  $this->defense_max                 
                'b_defense_min'      =>  $this->b_defense_min                 
                'b_defense_max'      =>  $this->b_defense_max                 
                'hp_min'             =>  $this->hp_min             
                'hp_max'             =>  $this->hp_max             
                'b_hp_min'           =>  $this->b_hp_min             
                'b_hp_max'           =>  $this->b_hp_max             
                'sp_attack_min'      =>  $this->sp_attack_min                 
                'sp_attack_max'      =>  $this->sp_attack_max                 
                'b_sp_attack_min'    =>  $this->b_sp_attack_min                     
                'b_sp_attack_max'    =>  $this->b_sp_attack_max                     
                'sp_defense_min'     =>  $this->sp_defense_min                     
                'sp_defense_max'     =>  $this->sp_defense_max                     
                'b_sp_defense_min'   =>  $this->b_sp_defense_min                     
                'b_sp_defense_max'   =>  $this->b_sp_defense_max                     
                'speed_min'          =>  $this->speed_min             
                'speed_max'          =>  $this->speed_max             
                'b_speed_min'        =>  $this->b_speed_min                 
                'b_speed_max'        =>  $this->b_speed_max                 
                'farming_min'        =>  $this->farming_min                 
                'farming_max'        =>  $this->farming_max                 
                'b_farming_min'      =>  $this->b_farming_min                 
                'b_farming_max'      =>  $this->b_farming_max                 
                'steeling_min'       =>  $this->steeling_min                 
                'steeling_max'       =>  $this->steeling_max                 
                'b_steeling_min'     =>  $this->b_steeling_min                     
                'b_steeling_max'     =>  $this->b_steeling_max                     
                'wooding_min'        =>  $this->wooding_min                 
                'wooding_max'        =>  $this->wooding_max                 
                'b_wooding_min'      =>  $this->b_wooding_min                 
                'b_wooding_max'      =>  $this->b_wooding_max                 
                'created_at'         =>  $this->created_at                 
                'updated_at'         =>  $this->updated_at                 
                'created_by'         =>  $this->created_by                 
                'updated_by'         =>  $this->updated_by                 
            ]
        }
    }
}