<?php

declare(strict_types=1);

namespace api\Core\AvailableHeroes\Infrastructure\Yii;

use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use api\Core\AvailableHeroes\Domain\AvailableHero; 
use api\Core\AvailableHeroes\Domain\Repository\IAvailableHeroRepository;
use api\Core\AvailableHeroes\Infrastructure\Persistence\availableHeroRepositoryACtiveRecord;
use api\Core\AvailableHeroes\Application\Query\GetAHeroByRarityHandler;
use yii\helpers\Json;
use yii\web\Response;
use Yii;

class SaveAHeroController
{
    private GetAHeroByRarityHandler $handler;

    public function __construct()
    { 
        $repository = new availableHeroRepositoryACtiveRecord();
        $this->handler = new GetAHeroByRarityHandler($repository);
    }

    public function __invoke($rarity)
    {    

    }

}  