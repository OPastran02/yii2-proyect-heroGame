<?php

declare(strict_types=1);

namespace api\Core\AvailableHeroes\Infrastructure\Ui\Http\Controller;

use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use api\Core\General\Object\Domain\Objeto; 
use api\Core\General\Object\Domain\Repository\IObjetoRepository;
use api\Core\General\Object\Infrastructure\Persistence\ActiveRecord\ObjetoRepositoryActiveRecord;
use api\Core\General\Object\Application\Query\GetObjetoByIdHandler;
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

            $data = [
                'status' => 'ok',
                'hits' => [
                    $hero->toPrimitives()
                ]
            ];
            $response = Yii::$app->response;
            $response->format = Response::FORMAT_JSON;
            $response->data = $data; 

        }catch(InvalidRequestValueException $e){
            $errorData = [
                'status' => 'error',
                'errorMessage' => 'errorazo'
            ];
            $response = Yii::$app->response;
            $response->format = Response::FORMAT_JSON;
            $response->data = $errorData;
            $response->setStatusCode(400);
        }   

        return $response;
    }

}  

