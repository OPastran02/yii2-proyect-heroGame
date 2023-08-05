<?php

declare(strict_types=1);

namespace App\Core\AvailableHeroes\Domain;

use App\Shared\Domain○\DomainError;

final class AvailableHeroesNotFound extend DomainError
{
    public function __construct (private AvailableHeroId $id)
    {
        parent::__construct();
    }

    public function errorCode(): string
    {
        return 'video_not_found';
    }

    protected function errorMessage(): string
    {
        return sprintf('The video <%s> has not been found', $this->id->value());
    }
}