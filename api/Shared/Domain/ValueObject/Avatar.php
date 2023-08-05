<?php

declare(strict_types=1);

namespace App\Shared\Domain\ValueObject;

final class Avatar extends StringValueObject
{
    private const MIN_LENGTH = 1;
    private const MAX_LENGTH = 8;
    public function __construct(private string $value)
    {        
        parent::__construct($value);
        $this->ensureLengthIsBetweenAcceptedValues($value);
    }

    private function ensureLengthIsBetweenAcceptedValues(string $value): void
    {
        $length = strlen($value);
        if ($length < self::MIN_LENGTH || $length > self::MAX_LENGTH) {
            throw new \DomainException(
                sprintf(
                    'The length of the avatar (%s) must be between %s and %s',
                    $value,
                    self::MIN_LENGTH,
                    self::MAX_LENGTH
                )
            );
        }
    }

    public function value(): string
    {
        return $this->value;
    }
}