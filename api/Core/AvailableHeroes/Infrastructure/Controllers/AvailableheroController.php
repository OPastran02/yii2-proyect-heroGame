<?php

namespace api\Core\AvailableHeroes\Infrastructure\Controllers;

use common\models\availablehero;
use backend\models\search\AvailableheroSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use api\Core\AvailableHeroes\Domain\AvailableHero as availableheroDom;
use api\Core\AvailableHeroes\Domain\ValueObjects\AvailableHeroId;
use api\Core\AvailableHeroes\Infrastructure\Persistence\availableHeroRepositoryACtiveRecord;
use api\Core\AvailableHeroes\Application\Create\AvailableHeroesSave;
use api\Core\AvailableHeroes\Application\Find\AvailableHeroesGetbyId;
use api\Core\AvailableHeroes\Application\Find\AvailableHeroesGetByrarity;
use common\models\AvailableHeroes as AvailableHeroesModel;
/**
 * AvailableheroController implements the CRUD actions for availablehero model.
 */
class AvailableheroController extends Controller
{
    private $AvailableHeroesSave;
    private $AvailableHeroesGetbyId;
    private $AvailableHeroesGetByrarity;
    private $availableHeroesRepository;

    public function __construct()
    {
        $this->availableHeroesRepository = new availableHeroRepositoryACtiveRecord();
        $this->AvailableHeroesSave = new AvailableHeroesSave();
        $this->AvailableHeroesGetbyId = new AvailableHeroesGetbyId();
        $this->AvailableHeroesGetByrarity = new AvailableHeroesGetByrarity();
    }

    public function getbyId(int $id): ?AvailableHero
    {
        return $this->AvailableHeroesGetbyId->__invoke($id);
    }

    public function getByrarity(int $id): AvailableHeroes
    {
        return $this->AvailableHeroesGetByrarity->__invoke($id);
    }

    public function delete(int $id): void
    {
        $repository = new AvailableHeroRepository();
        $repository->delete($id);
    }

    public function save(AvailableHeroesModel $availableHeroModel){
        $availableHero = AvailableHeroMapper::toDomain($availableHeroModel);
        $this->AvailableHeroesSave->__invoke($availableHero);
    }

}    