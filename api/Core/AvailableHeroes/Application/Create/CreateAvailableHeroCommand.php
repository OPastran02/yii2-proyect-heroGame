<?php   

declare(strict_types=1);

namespace api\Core\AvailableHeroes\Application\Create;

use api\Shared\Domain\Bus\Command\Command;

final class CreateAvailableHeroCommand implements Command
{
    public function __construct(
        private readonly string $id,
        private readonly string $name,
        private readonly string $description,
        private readonly string $world,
        private readonly string $avatar,
        private readonly string $avatar_block,
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
    ){}

    public function id(): string
    {
        return $this->id;
    }

    public function name(): string
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

    public function avatar_block(): string
    {
        return $this->avatar_block;
    }

    public function race_id():string
    {
        return $this->race_id;
    }

    public function rarity_id():string
    {
        return $this->rarity_id;
    }

    public function nature_id():string
    {
        return $this->nature_id;
    }

    public function type_id():string
    {
        return $this->type_id;
    }

    public function attack_min():string
    {
        return $this->attack_min;
    }

    public function attack_max():string
    {
        return $this->attack_max;
    }

    public function b_attack_min():string
    {
        return $this->b_attack_min;
    }

    public function b_attack_max():string
    {
        return $this->b_attack_max;
    }

    public function defense_min():string
    {
        return $this->defense_min;
    }

    public function defense_max():string
    {
        return $this->defense_max;
    }

    public function b_defense_min():string
    {
        return $this->b_defense_min;
    }

    public function b_defense_max():string
    {
        return $this->b_defense_max;
    }

    public function hp_min():string
    {
        return $this->hp_min;
    }

    public function hp_max():string
    {
        return $this->hp_max;
    }

    public function b_hp_min():string
    {
        return $this->b_hp_min;
    }

    public function b_hp_max():string
    {
        return $this->b_hp_max;
    }

    public function sp_attack_min():string
    {
        return $this->sp_attack_min;
    }

    public function sp_attack_max():string
    {
        return $this->sp_attack_max;
    }

    public function b_sp_attack_min():string
    {
        return $this->b_sp_attack_min;
    }

    public function b_sp_attack_max():string
    {
        return $this->b_sp_attack_max;
    }

    public function sp_defense_min():string
    {
        return $this->sp_defense_min;
    }

    public function sp_defense_max():string
    {
        return $this->sp_defense_max;
    }

    public function b_sp_defense_min():string
    {
        return $this->b_sp_defense_min;
    }

    public function b_sp_defense_max():string
    {
        return $this->b_sp_defense_max;
    }

    public function speed_min():string
    {
        return $this->speed_min;
    }

    public function speed_max():string
    {
        return $this->speed_max;
    }

    public function b_speed_min():string
    {
        return $this->b_speed_min;
    }

    public function b_speed_max():string
    {
        return $this->b_speed_max;
    }

    public function farming_min():string
    {
        return $this->farming_min;
    }

    public function farming_max():string
    {
        return $this->farming_max;
    }

    public function b_farming_min():string
    {
        return $this->b_farming_min;
    }

    public function b_farming_max():string
    {
        return $this->b_farming_max;
    }

    public function steeling_min():string
    {
        return $this->steeling_min;
    }

    public function steeling_max():string
    {
        return $this->steeling_max;
    }

    public function b_steeling_min():string
    {
        return $this->b_steeling_min;
    }

    public function b_steeling_max():string
    {
        return $this->b_steeling_max;
    }

    public function wooding_min():string
    {
        return $this->wooding_min;
    }

    public function wooding_max():string
    {
        return $this->wooding_max;
    }

    public function b_wooding_min():string
    {
        return $this->b_wooding_min;
    }

    public function b_wooding_max():string
    {
        return $this->b_wooding_max;
    }

    public function created_at():string
    {
        return $this->created_at;
    }

    public function updated_at():string
    {
        return $this->updated_at;
    }

    public function created_by():string
    {
        return $this->created_by;
    }

    public function updated_by():string
    {
        return $this->updated_by;
    }

}