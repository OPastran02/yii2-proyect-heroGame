<?php

declare(strict_types=1);

namespace api\Core\BoxRatios\Domain;

use api\Shared\Domain\Collection;

final class BoxRatios extends Collection
{
    protected function type(): string
    {
        return BoxRatio::class;
    }
}