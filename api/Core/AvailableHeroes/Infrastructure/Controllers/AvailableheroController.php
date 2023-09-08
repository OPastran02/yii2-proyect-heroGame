<?php

namespace api\Core\AvailableHeroes\Infrastructure\Controllers;

use common\models\availablehero;
use backend\models\search\AvailableheroSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use api\Core\AvailableHeroes\Domain\AvailableHero as availableheroDom;
use api\Core\AvailableHeroes\Domain\Repository\IAvailableHeroRepository;
use api\Core\AvailableHeroes\Domain\ValueObjects\AvailableHeroId;
use api\Core\AvailableHeroes\Infrastructure\Persistence\availableHeroRepositoryACtiveRecord;
use api\Core\AvailableHeroes\Application\Create\AvailableHeroesSave;
use api\Core\AvailableHeroes\Application\Find\AvailableHeroesGetbyId;
use api\Core\AvailableHeroes\Application\Find\AvailableHeroesGetByrarity;
use api\Core\AvailableHeroes\Application\Delete\AvailableHeroesDelete;
use api\Core\AvailableHeroes\Application\Update\AvailableHeroesUpdate;
use api\Core\AvailableHeroes\Domain\AvailableHeroes;
use common\models\availablehero as AvailableHeroesModel;
use api\Core\AvailableHeroes\Infrastructure\Persistence\AvailableHeroMapper;    
use api\Shared\Domain\Bus\Event\EventBus;


class AvailableHeroController
{
    private $availableHeroesRepository;
    
    public function __construct()
    {
        $this->availableHeroesRepository = new AvailableHeroRepositoryACtiveRecord(); 
    }

    public function getbyId(int $id): ?availableheroDom
    {    
        try{
            $hero = (new GetAHeroByIdHandler($this->availableHeroesRepository))(
                new GetAHeroByIdRequest($request)
            );
            $response = JsonResponse([
                'status' => 'ok',
                'hits' => [
                    $hero->toPrimitives()
                ]
            ],200);
        }catch(InvalidRequestValueException $e){
            $response = JsonResponse([
                'status' => 'error',
                'errorMessage' => 'errorazo'
            ],500);
        }   
        var_dump($response);
        exit();
        return $response;
    }

    public function getByrarity(int $id): AvailableHeroes
    {
        return new AvailableHeroesGetByrarity($this->availableHeroesRepository,$id);
    }

    public function delete(int $id): void
    { 
        new AvailableHeroesDelete($this->availableHeroesRepository,$id);
    }

    public function save(AvailableHeroesModel $availableHeroModel):?int
    {
        return new AvailableHeroesSave($this->availableHeroesRepository,AvailableHeroMapper::toDomain($availableHeroModel));
    }

    public function update(AvailableHeroesModel $availableHeroModel):?int
    {
        return new AvailableHeroesUpdate($this->availableHeroesRepository,AvailableHeroMapper::toDomain($availableHeroModel));
    }

}  

