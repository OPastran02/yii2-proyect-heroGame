<?php

declare(strict_types=1);

namespace App\Shared\Domain\ValueObject;

final class Stats
{
    private const MIN_VALUE = 0;
    private const MAX_VALUE = 4000000;    

    public function __construct(private int $value)
    {
        parent::__construct($value);
        $this->ensureIsBetweenAcceptedValues($value);
    }

    public function ensureIsBetweenAcceptedValues(int $value): void
    {
        if ($value < self::MIN_VALUE || $value > self::MAX_VALUE) {
            throw new DomainException(
                sprintf(
                    'The value (%s) must be between %s and %s',
                    $value,
                    self::MIN_VALUE,
                    self::MAX_VALUE
                )
            );
        }
    }

    public function value(): int
    {
        return $this->value;
    }
}