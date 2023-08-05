<?php

declare(strict_types=1);

namespace App\Core\AvailableHeroes\Domain\ValueObjects;

final class AvailableHeroWorld extends StringValueObject
{

    private const MIN_LENGTH = 1;
    private const MAX_LENGTH = 255;
    public function __construct(private string $world)
    {
        parent::__construct($value);
        $this->ensureIsValidName($value);
        $this->ensureLengthIsBetweenAcceptedValues($world);
    }

    private function ensureIsValidName(string $value): void
    {
        if (empty($value)) {
            throw new \InvalidArgumentException(
                sprintf('<%s> does not allow the value <%s>.', static::class, $value)
            );
        }
    }

    public function ensureIsBetweenAcceptedValues(string $world): void
    {
        if (!in_array($world, AvailableHeroWorld::availableWorlds())) {
            throw new DomainException(
                sprintf(
                    'The world value (%s) is invalid',
                    $world
                )
            );
        }
    }

    public function value(): string
    {
        return $this->world;
    }
}