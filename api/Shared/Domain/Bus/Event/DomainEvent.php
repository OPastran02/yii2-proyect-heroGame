<?php

declare(strict_types=1);

namespace api\Shared\Domain\Bus\Event;

use api\core\shared\Domain\Utils;
use api\core\shared\Domain\ValueObject\UUID;
use DateTimeImmutable;

abstract class DomainEvent
{
    private string $eventId;
    private string $occurredOn;
    private string $aggregateId,

    public function __construct(
        private string $aggregateId,
        private string $eventId = null,
        private string $occurredOn = null
    ) {
        $this->aggregateId = $aggregateId;
        $this->eventId = $eventId ?? UUID::random()->value();
        $this->occurredOn = $occurredOn ?? Utils::dateToString(new DateTimeImmutable());
    }

    //convierte los objetos en primitivos
    abstract public static function fromPrimitives(
        string $aggregateId,
        array $body,
        string $eventId,
        string $occurredOn
    ): self;

    abstract public function toPrimitives(): array;

    abstract public static function eventName(): string;

    public function aggregateId(): string
    {
        return $this->aggregateId;
    }

    public function eventId(): string
    {
        return $this->eventId;
    }

    public function occurredOn(): string
    {
        return $this->occurredOn;
    }
}