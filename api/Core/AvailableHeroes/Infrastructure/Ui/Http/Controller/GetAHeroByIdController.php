<?php

namespace api\Core\AvailableHeroes\Infrastructure\Controllers;


use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use api\Core\AvailableHeroes\Domain\AvailableHero; 
use api\Core\AvailableHeroes\Domain\Repository\IAvailableHeroRepository;
use api\Core\AvailableHeroes\Infrastructure\Persistence\availableHeroRepositoryACtiveRecord;
use api\Core\AvailableHeroes\Application\Query\GetAHeroByIdHandler;


class AvailableHeroController
{
    private $availableHeroesRepository;
    
    public function __construct()
    {
        $this->availableHeroesRepository = new AvailableHeroRepositoryACtiveRecord(); 

    }

    public function __invoke(Request $request): ?AvailableHero
    {    
        try{
            $hero = (new GetAHeroByIdHandler($this->availableHeroesRepository))(
                new GetAHeroByIdRequest($request)
            );

            $response = JsonResponse([
                'status' => 'ok',
                'hits' => [
                    $hero
                ]
            ],200);
        }catch(InvalidRequestValueException $e){
            $response = JsonResponse([
                'status' => 'error',
                'errorMessage' => 'errorazo'
            ],500);
        }   

        return $response;
    }

}  

