<?php

declare(strict_types=1);

namespace App\Core\AvailableHeroes\Domain;

use App\core\AvailableHeroes\Domain\ValueObjects\AvailableHeroId;
use App\core\AvailableHeroes\Domain\ValueObjects\AvailableHeroName;
use App\core\AvailableHeroes\Domain\ValueObjects\AvailableHeroWorld;
use App\core\AvailableHeroes\Domain\ValueObjects\AvailableHeroDescription;
use App\shared\Domain\ValueObjects\Avatar;
use App\shared\Domain\ValueObjects\Boost;
use App\shared\Domain\ValueObjects\Stats;
use App\shared\Domain\ValueObjects\FkId;