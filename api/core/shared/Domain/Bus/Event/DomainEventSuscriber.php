<?php

declare(strict_types=1);

namespace App\Core\Shared\Domain\Bus\Event;

interface DomainEventSuscriber
{
    public static function subscribedTo(): array;
}