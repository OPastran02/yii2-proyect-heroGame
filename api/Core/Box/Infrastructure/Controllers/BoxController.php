<?php

namespace api\Core\AvailableHeroes\Infrastructure\Controllers;

use common\models\boxratio;
//use backend\models\search\AvailableheroSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use api\Core\Box\Domain\Box;
use api\Core\Box\Domain\Boxes;
use api\Core\Box\Domain\Repository\IBoxRepository;

use api\Core\Box\Infrastructure\Persistence\BoxActiveRecord;
use api\Core\Box\Application\Create\BoxSave;
use api\Core\Box\Application\Find\BoxGetById;
use api\Core\Box\Application\Find\BoxGetAll;
use api\Core\Box\Application\Delete\BoxDelete;
use api\Core\Box\Application\Update\BoxUpdate;

use api\Shared\Domain\ValueObject\FkId;
use api\Core\Box\Infrastructure\Persistence\BoxMapper;    
use api\Shared\Domain\Bus\Event\EventBus;


class BoxController
{
    private $repository;


    public function __construct()
    {
        $this->repository = new BoxActiveRecord(); 
    }

    public function getbyId(int $id): ?Box
    {    
        return new BoxGetById($this->repository, $id);
    }

    public function getAll(int $id): Boxes
    {
        return new BoxGetAll($this->repository,$id);
    }

    public function delete(int $id): void
    { 
        new BoxDelete($this->repository,$id);
    }

    public function save(boxratio $model):?int
    {
        return new BoxSave($this->repository,BoxMapper::toDomain($model));
    }

    public function update(boxratio $model):?int
    {
        return new BoxUpdate($this->repository,BoxMapper::toDomain($model));
    }

}  

