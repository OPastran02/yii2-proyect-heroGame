<?php

declare(strict_types=1);

namespace api\Core\BoxRatios\Domain;

use api\core\BoxRatios\Domain\ValueObjects\BoxRatioName;
use api\core\BoxRatios\Domain\ValueObjects\BoxRatioDescription;
use api\core\BoxRatios\Domain\ValueObjects\BoxRatioBooster;
use api\Shared\Domain\ValueObject\FkId;
use api\Shared\Domain\ValueObject\UUID;
use api\Shared\Domain\ValueObject\Primitives\StringValueObject;
use api\Shared\Domain\Aggregate\AggregateRoot;
use DateTime;

final class BoxRatio //extends AggregateRoot
{
    public function __construct(
        private FkId|null $id,
        private BoxRatioName $name,
        private BoxRatioDescription $description,
        private FkId $race_id,
        private BoxRatioBooster $booster,
        private int|null $modifiers,
        private int|null $crystals,
        private int|null $diamonds,
        private int|null $coins,
        private int $available,
        private readonly DateTime|null $created_at,
        private readonly DateTime|null $updated_at,
        private readonly UUID|null $created_by,
        private readonly UUID|null $updated_by
    ){
    }

    public static function create( 
        FkId|null $id,
        BoxRatioName $name,
        BoxRatioDescription $description,
        FkId $race_id,
        BoxRatioBooster $booster,
        int|null $modifiers,
        int|null $crystals,
        int|null $diamonds,
        int|null $coins,
        int $available,
        DateTime|null $created_at,
        DateTime|null $updated_at,
        UUID|null $created_by,
        UUID|null $updated_by
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

    public function getId(): FkId|null
    {
        return $this->id;
    }

    public function getName(): BoxRatioName
    {
        return $this->name;
    }

    public function getDescription(): BoxRatioDescription
    {
        return $this->description;
    }

    public function race_id(): FkId
    {
        return $this->race_id;
    }

    public function getBooster(): BoxRatioBooster
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
    
    public function getCreatedAt(): DateTime|null
    {
        return $this->created_at;
    }

    public function getUpdatedAt(): DateTime|null
    {
        return $this->updated_at;
    }

    public function getCreatedBy(): UUID|null
    {
        return $this->created_by;
    }

    public function getUpdatedBy(): UUID|null
    {
        return $this->updated_by;
    }
    
}