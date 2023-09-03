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

final class AvailableHeroesUpdate
{
    private AvailableHeroesRepositoryInterface $repository;


    public function __construct(AvailableHeroesRepositoryInterface $repository){
        $this->repository = $repository;
    }

    public function __invoke(
        AvailableHero $availableHero
    ){
        $this->repository->save($availableHero);
        //$this->bus->publish(...$availableHero->pullDomainEvents());
    }
}