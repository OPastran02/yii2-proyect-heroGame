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
use api\Shared\Domain\ValueObject\Primitives\StringValueObject;
use api\Shared\Domain\Aggregate\AggregateRoot;
use DateTime;

final class BoxRatios //extends AggregateRoot
{
    public function __construct(
        private FkId $id,
        private AvailableHeroName $name,
        private AvailableHeroDescription $description,
        private FkId $race_id,
        private StringValueObject $booster,
        private int|null $modifiers,
        private int|null $crystals,
        private int|null $diamonds,
        private int|null $coins,
        private int $available,
        private readonly DateTime $created_at,
        private readonly DateTime $updated_at,
        private readonly UUID $created_by,
        private readonly UUID $updated_by
    ){
    }

    public static function create( 
        FkId $id,
        AvailableHeroName $name,
        AvailableHeroDescription $description,
        FkId $race_id,
        StringValueObject $booster,
        int|null $modifiers,
        int|null $crystals,
        int|null $diamonds,
        int|null $coins,
        int $available,
        DateTime $created_at,
        DateTime $updated_at,
        UUID $created_by,
        UUID $updated_by
    ): self {
        $boxRatio = new self(
            $id,
            $name,
            $description,
            $race_id,
            $booster,
            $modifiers,
            $crystals,
            $diamonds,
            $coins,
            $available,
            $created_at,
            $updated_at,
            $created_by,
            $updated_by
        );
        return $boxRatio;
    }

    public function getId(): FkId
    {
        return $this->id;
    }

    public function getName(): AvailableHeroName
    {
        return $this->name;
    }

    public function getDescription(): AvailableHeroDescription
    {
        return $this->description;
    }

    public function race_id(): FkId
    {
        return $this->race_id;
    }

    public function getBooster(): StringValueObject
    {
        return $this->booster;
    }

    public function getModifiers(): int|null
    {
        return $this->modifiers;
    }

    public function getCrystals(): int|null
    {
        return $this->crystals;
    }

    public function getDiamonds(): int|null
    {
        return $this->diamonds;
    }

    public function getCoins(): int|null
    {
        return $this->coins;
    }

    public function getAvailable(): int
    {
        return $this->available;
    }
    
    public function getCreatedAt(): DateTime
    {
        return $this->created_at;
    }

    public function getUpdatedAt(): DateTime
    {
        return $this->updated_at;
    }

    public function getCreatedBy(): UUID
    {
        return $this->created_by;
    }

    public function getUpdatedBy(): UUID
    {
        return $this->updated_by;
    }
    
}