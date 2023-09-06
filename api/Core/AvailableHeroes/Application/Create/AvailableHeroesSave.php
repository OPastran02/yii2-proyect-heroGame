<?php   

declare(strict_types=1);

namespace api\Core\AvailableHeroes\Application\Create;

use api\Core\AvailableHeroes\Domain\Repository\AvailableHeroesRepositoryInterface;
use api\core\AvailableHeroes\Domain\ValueObjects\AvailableHeroId;
use api\core\AvailableHeroes\Domain\ValueObjects\AvailableHeroName;
use api\core\AvailableHeroes\Domain\ValueObjects\AvailableHeroWorld;
use api\core\AvailableHeroes\Domain\ValueObjects\AvailableHeroDescription;
use api\Shared\Domain\ValueObject\Avatar;
use api\Shared\Domain\ValueObject\Boost;
use api\Shared\Domain\ValueObject\Stats;
use api\Shared\Domain\ValueObject\FkId;
use api\Shared\Domain\Bus\Event\EventBus;
use api\Core\AvailableHeroes\Domain\AvailableHero;
use common\models\availablehero as AvailableHeroModel;

use DateTime;

final class AvailableHeroesSave
{
    private AvailableHeroesRepositoryInterface $repository;
    private AvailableHero $availableHero;

    public function __construct(AvailableHeroesRepositoryInterface $repository,AvailableHero $availableHero, private readonly EventBus $bus){
        $this->repository = $repository;
        $this->availableHero = $availableHero;
    }

    public function __invoke(){
        $this->repository->save($this->availableHero);
    }
}