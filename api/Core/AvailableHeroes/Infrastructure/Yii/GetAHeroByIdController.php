<?php

declare(strict_types=1);

namespace api\Core\AvailableHeroes\Infrastructure\Yii;

use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use api\Core\AvailableHeroes\Domain\AvailableHero; 
use api\Core\AvailableHeroes\Domain\Repository\IAvailableHeroRepository;
use api\Core\AvailableHeroes\Infrastructure\Persistence\availableHeroRepositoryACtiveRecord;
use api\Core\AvailableHeroes\Application\Query\GetAHeroByIdHandler;
use yii\helpers\Json;
use yii\web\Response;
use Yii;

class GetAHeroByIdController
{
    private GetAHeroByIdHandler $handler;

    public function __construct()
    { 
        $repository = new availableHeroRepositoryACtiveRecord();
        $this->handler = new GetAHeroByIdHandler($repository);
    }

    public function getById(int $id)
    {    
        try{
            $hero = ($this->handler)($id);
            return $hero->toPrimitives();
        }catch(InvalidRequestValueException $e){
            return $e;
        }   
    }

}  

