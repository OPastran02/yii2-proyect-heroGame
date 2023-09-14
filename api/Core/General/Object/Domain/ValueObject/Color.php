<?php

declare(strict_types=1);

namespace api\Core\General\Object\Domain\ValueObject;

use api\Shared\Domain\ValueObject\Primitives\StringValueObject;
use Error;

final class Color extends StringValueObject
{
    protected string $value;

    public function __construct(string $value)
    {
        parent::__construct($value);
        $this->value = $value;
    }

    public function value(): int
    {
        return $this->value;
    }

}