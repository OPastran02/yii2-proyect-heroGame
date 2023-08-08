<?php   

declare(strict_types=1);

namespace api\Core\AvailableHeroes\Application\Create;

use api\core\AvailableHeroes\Domain\ValueObjects\AvailableHeroId;
use api\core\AvailableHeroes\Domain\ValueObjects\AvailableHeroName;
use api\core\AvailableHeroes\Domain\ValueObjects\AvailableHeroWorld;
use api\core\AvailableHeroes\Domain\ValueObjects\AvailableHeroDescription;
use api\Shared\Domain\ValueObject\Avatar;
use api\Shared\Domain\ValueObject\Boost;
use api\Shared\Domain\ValueObject\Stats;
use api\Shared\Domain\ValueObject\FkId;
use api\Shared\Domain\Bus\Event\EventBus;
use DateTime;

final class AvailableHeroesCreator
{
    public function __construct()
    {
    }

    public function create(
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
        Boost $b_attack_max,
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
        DateTime $created_at,
        DateTime $updated_at,
        FkId $created_by,
        FkId $updated_by
    ){
        $availableHero = AvailableHero::create(
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
            $b_attack_max,
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
            $created_at,
            $updated_at,
            $created_by,
            $updated_by
        );

        $this->repository->save($availableHero);

        $this->bus->publish(...$availableHero->pullDomainEvents());
    }
}