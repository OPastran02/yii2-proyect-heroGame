<?php

declare(strict_types=1);

namespace api\Core\Boxes\Domain\Exceptions;

use api\Shared\Domain\DomainError;

final class BoxesNotFound extends DomainError
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
        return sprintf('The boxes has not been found');
    }
}