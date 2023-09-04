<?php

declare(strict_types=1);

namespace api\Core\Box\Domain;

use api\Shared\Domain\Collection;

final class Boxes extends Collection
{
    protected function type(): string
    {
        return BoxRatio::class;
    }
}