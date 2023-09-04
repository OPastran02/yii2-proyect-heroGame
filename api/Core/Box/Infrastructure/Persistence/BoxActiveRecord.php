<?php

namespace api\Core\Box\Infrastructure\Persistence;


use api\Core\Box\Domain\Box;
use api\Core\Box\Domain\Boxes;
use api\Core\Box\Domain\Repository\IBoxRepository;
use common\models\boxratio;
use api\Core\Box\Infrastructure\Persistence\BoxMapper;    

use api\Core\Box\Domain\ValueObjects\BoxBooster;
use api\Core\Box\Domain\ValueObjects\BoxDescription;
use api\Core\Box\Domain\ValueObjects\BoxName;
use api\Shared\Domain\ValueObject\FkId;
use api\Shared\Domain\ValueObject\UUID;

use Yii;
use DateTime;

class BoxActiveRecord implements IBoxRepository
{
    public function getbyId(int $id): ?Box
    {
        $model = boxratio::findOne($id);
        if (!$model) {
            return null;
        }else{
            return boxratio::toDomain($model);
        }
    }

    public function getAll(): Boxes
    {
        $boxes = boxratio::findAll();
        return new Boxes($boxes);
    }

    public function delete(int $id): void
    {
        $box = $this->getById($id);
        if ($box) {
            $model = BoxMapper::toModel($box);
            if ($model->validate()) {
                $deleted = $model->delete();
            }
        }
    }

    public function save(Box $box): ?int
    {
        $model = BoxMapper::toModel($box);
        if ($model->save()) {
            return $model->getPrimaryKey(); 
        }
    }

    public function update(Box $box): ?int
    {
        $model = BoxMapper::toModel($box);
        if ($model->update()) {
            return $model->getPrimaryKey();
        }else{
            return 0;
        }
    }
}
