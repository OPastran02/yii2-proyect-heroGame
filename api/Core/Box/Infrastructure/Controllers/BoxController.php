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
use api\Core\Box\Application\Find\BoxesGetById;
use api\Core\Box\Application\Find\BoxesGetAll;
use api\Core\Box\Application\Delete\BoxesDelete;
use api\Core\Box\Application\Update\BoxesUpdate;

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
        return new BoxesGetById($this->repository, $id);
    }

    public function getAll(int $id): Boxes
    {
        return new BoxesGetAll($this->repository,$id);
    }

    public function delete(int $id): void
    { 
        new BoxesDelete($this->repository,$id);
    }

    public function save(boxratio $model):?int
    {
        return new BoxSave($this->repository,BoxMapper::toDomain($model));
    }

    public function update(boxratio $model):?int
    {
        return new BoxesUpdate($this->repository,BoxMapper::toDomain($model));
    }

}  

