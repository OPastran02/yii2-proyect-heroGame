<?php

namespace api\Core\AvailableHeroes\Infrastructure\Controllers;

use common\models\availablehero;
use backend\models\search\AvailableheroSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use api\Core\AvailableHeroes\Domain\AvailableHero as availableheroDom;
use api\Core\AvailableHeroes\Domain\Repository\AvailableHeroesRepositoryInterface;
use api\Core\AvailableHeroes\Domain\ValueObjects\AvailableHeroId;
use api\Core\AvailableHeroes\Infrastructure\Persistence\availableHeroRepositoryACtiveRecord;
use api\Core\AvailableHeroes\Application\Create\AvailableHeroesSave;
use api\Core\AvailableHeroes\Application\Find\AvailableHeroesGetbyId;
use api\Core\AvailableHeroes\Application\Find\AvailableHeroesGetByrarity;
use api\Core\AvailableHeroes\Application\Delete\AvailableHeroesDelete;
use api\Core\AvailableHeroes\Domain\AvailableHeroes;
use common\models\availablehero as AvailableHeroesModel;
use api\Core\AvailableHeroes\Infrastructure\Persistence\AvailableHeroMapper;    
use api\Shared\Domain\Bus\Event\EventBus;


class AvailableHeroController
{
    private $availableHeroesRepository;
    private $AvailableHeroesSave;
    private $AvailableHeroesGetbyId;
    private $AvailableHeroesGetByrarity;
    private $AvailableHeroesDelete;

    public function __construct()
    {
        $this->availableHeroesRepository = new AvailableHeroRepositoryACtiveRecord(); // Corregir el nombre de la clase
        $this->AvailableHeroesSave = new AvailableHeroesSave($this->availableHeroesRepository);
        $this->AvailableHeroesGetbyId = new AvailableHeroesGetbyId($this->availableHeroesRepository);
        $this->AvailableHeroesGetByrarity = new AvailableHeroesGetByrarity($this->availableHeroesRepository);
        $this->AvailableHeroesDelete = new AvailableHeroesDelete($this->availableHeroesRepository);
    }

    public function getbyId(int $id): ?availableheroDom
    {    
        return $this->AvailableHeroesGetbyId->__invoke($id);
    }

    public function getByrarity(int $id): AvailableHeroes
    {
        return $this->AvailableHeroesGetByrarity->__invoke($id);
    }

    public function delete(int $id): void
    { 
        $this->AvailableHeroesDelete->__invoke($id);
    }

    public function save(AvailableHeroesModel $availableHeroModel)
    {
        $availableHero = AvailableHeroMapper::toDomain($availableHeroModel);
        $this->AvailableHeroesSave->__invoke($availableHero);
    }

}  

