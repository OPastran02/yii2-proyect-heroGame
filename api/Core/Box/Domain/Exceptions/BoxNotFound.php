<?php

declare(strict_types=1);

namespace api\Core\Box\Domain\Exceptions;

use api\Shared\Domain\DomainError;

final class BoxNotFound extends DomainError
{
    public function __construct ()
    {
        parent::__construct();
    }

    public function errorCode(): string
    {
        return 'boxes_not_found';
    }

    protected function errorMessage(): string
    {
        return sprintf('The box has not been found');
    }
}