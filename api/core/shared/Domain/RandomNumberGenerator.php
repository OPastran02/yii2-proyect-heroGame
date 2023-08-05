<?php

declare(strict_types=1);

namespace App\Core\Shared\Domain;

//clase para generar un numero aleatorio
interface RandomNumberGenerator
{
    public function generate(): int;
}