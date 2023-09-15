<?php

declare(strict_types=1);

namespace api\Core\AvailableHeroes\Domain;

use api\Shared\Domain\ValueObject\UUID;
use api\Shared\Domain\ValueObject\NID;
use api\Shared\Domain\ValueObject\UnixTimestampDate;
use api\Shared\Domain\ValueObject\Available;
use api\Shared\Domain\ValueObject\GameText;
use api\Core\General\Object\Domain\ValueObject\Color;
use api\Core\General\Object\Domain\ValueObject\Image;
use api\Core\General\Object\Domain\ValueObject\Model;


use api\Shared\Domain\Aggregate\AggregateRoot;
use DateTime;


final class Objeto extends AggregateRoot
{
    public function __construct(
        private NID $id,
        private GameText $name,
        private GameText $description,
        private Color $color,
        private Image $model,
        private Model $image,
        private Available $available,
        private UnixTimestampDate|null $createdAt,
        private UnixTimestampDate|null $updatedAt,
        private UUID|null $createdBy,
        private UUID|null $updatedBy
    )
    {
    }

    public static function create( 
        NID $id,
        GameText $name,
        GameText $description,
        Color $color,
        Image $model,
        Model $image,
        Available $available,
        ?UnixTimestampDate $createdAt,
        ?UnixTimestampDate $updatedAt,
        ?UUID $createdBy,
        ?UUID $updatedBy
    ): self 
    {
        return $obj = new Objeto(
            $id,
            $name,
            $description,
            $color,
            $model,
            $image,
            $available,
            $createdAt,
            $updatedAt,
            $createdBy,
            $updatedBy
        );
    }

    public static function fromPrimitives(
        ?int $id,
        string $name,
        string $description,
        string $color,
        string $model,
        string $image,
        int $available,
        ?int $createdAt,
        ?int $updatedAt,
        ?string $createdBy,
        ?string $updatedBy
    ): self
    {
        return new Objeto(
            isset($id) ? new NID($id):   null,

        );
    }

    public function toPrimitives(): array
    {
        return [
            'id'                    =>          isset($this->id) ? $this->id->value() : null,
            'name'                  =>          $this->name->value(),
            'description'           =>          $this->description->value(),
            'world'                 =>          $this->world->value(),
            'avatar'                =>          $this->avatar->value(),
            'avatarBlock'           =>          $this->avatarBlock->value(),
            'race_id'               =>          $this->race_id->value(),
            'rarity_id'             =>          $this->rarity_id->value(),
            'nature_id'             =>          $this->nature_id->value(),
            'type_id'               =>          $this->type_id->value(),
            'attack_min'            =>          $this->attack_min->value(),
            'attack_max'            =>          $this->attack_max->value(),
            'b_attack_min'          =>          $this->b_attack_min->value(),
            'b_Battack_max'         =>          $this->b_Battack_max->value(),
            'defense_min'           =>          $this->defense_min->value(),
            'defense_max'           =>          $this->defense_max->value(),
            'b_defense_min'         =>          $this->b_defense_min->value(),
            'b_defense_max'         =>          $this->b_defense_max->value(),
            'hp_min'                =>          $this->hp_min->value(),
            'hp_max'                =>          $this->hp_max->value(),
            'b_hp_min'              =>          $this->b_hp_min->value(),
            'b_hp_max'              =>          $this->b_hp_max->value(),
            'sp_attack_min'         =>          $this->sp_attack_min->value(),
            'sp_attack_max'         =>          $this->sp_attack_max->value(),
            'b_sp_attack_min'       =>          $this->b_sp_attack_min->value(),
            'b_sp_attack_max'       =>          $this->b_sp_attack_max->value(),
            'sp_defense_min'        =>          $this->sp_defense_min->value(),
            'sp_defense_max'        =>          $this->sp_defense_max->value(),
            'b_sp_defense_min'      =>          $this->b_sp_defense_min->value(),
            'b_sp_defense_max'      =>          $this->b_sp_defense_max->value(),
            'speed_min'             =>          $this->speed_min->value(),
            'speed_max'             =>          $this->speed_max->value(),
            'b_speed_min'           =>          $this->b_speed_min->value(),
            'b_speed_max'           =>          $this->b_speed_max->value(),
            'farming_min'           =>          $this->farming_min->value(),
            'farming_max'           =>          $this->farming_max->value(),
            'b_farming_min'         =>          $this->b_farming_min->value(),
            'b_farming_max'         =>          $this->b_farming_max->value(),
            'steeling_min'          =>          $this->steeling_min->value(),
            'steeling_max'          =>          $this->steeling_max->value(),
            'b_steeling_min'        =>          $this->b_steeling_min->value(),
            'b_steeling_max'        =>          $this->b_steeling_max->value(),
            'wooding_min'           =>          $this->wooding_min->value(),
            'wooding_max'           =>          $this->wooding_max->value(),
            'b_wooding_min'         =>          $this->b_wooding_min->value(),
            'b_wooding_max'         =>          $this->b_wooding_max->value(),
            'available'             =>          $this->available,
            'created_at'            =>          isset($created_at) ? $this->created_at->getTimestamp() : null,
            'updated_at'            =>          isset($updated_at) ? $this->updated_at->getTimestamp() : null,
            'created_by'            =>          isset($created_by) ? $this->created_by->value() : null,
            'updated_by'            =>          isset($updated_by) ? $this->updated_by->value() : null
        ];
    }
}