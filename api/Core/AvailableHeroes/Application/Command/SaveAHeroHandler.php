<?php   

declare(strict_types=1);

namespace api\Core\AvailableHeroes\Application\Command;

use api\Core\AvailableHeroes\Domain\Repository\AvailableHeroesRepositoryInterface;
use api\Core\AvailableHeroes\Domain\AvailableHero;


use DateTime;

final class SaveAHeroHandler
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