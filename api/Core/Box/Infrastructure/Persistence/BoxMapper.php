<?php

declare(strict_types=1);

namespace api\Core\Box\Infrastructure\Persistence;

use api\Core\Box\Domain\Box;
use api\Core\Box\Domain\Boxes;
use common\models\boxratio;
use common\models\User;
use api\Core\Box\Domain\ValueObjects\BoxBooster;
use api\Core\Box\Domain\ValueObjects\BoxDescription;
use api\Core\Box\Domain\ValueObjects\BoxName;
use api\Shared\Domain\ValueObject\FkId;
use api\Shared\Domain\ValueObject\UUID;
use DateTime;

final class BoxMapper
{
    public static function toModel(Box $box): boxratio
    {
        $model = new boxratio();
        $model->id = $box->id() ? $box->id()->value() : null;
        $model->name = $box->name()->value();
        $model->description = $box->description()->value();
        $model->race_id = $box->race_id()->value();
        $model->booster = $box->booster()->value();
        $model->modifiers = $box->modifiers()->value();
        $model->crystals = $box->crystals()->value();
        $model->diamonds = $box->diamonds()->value();
        $model->coins = $box->coins()->value();
        $model->available = $box->available() ? 1 : 0;
        $model->created_at = $box->createdAt() ? (int) $box->createdAt()->getTimestamp() : null;
        $model->updated_at = $box->updatedAt() ? (int) $box->updatedAt()->getTimestamp() : null;
        $model->created_by = $box->createdBy() ? $box->createdBy()->value() : null;
        $model->updated_by = $box->updatedBy() ? $box->updatedBy()->value() : null;

        return $model;
    }

    public static function toDomain(boxratio $model): Box
    {
        $box = Box::create(
            $model->id ? new FkId($model->id) : null,
            new BoxName((string)$model->name),
            new BoxDescription((string)$model->description),
            new FkId((string)$model->race_id),
            new BoxRatioBooster((string)$model->booster),
            $model->modifiers ? (int)$model->modifiers : null,
            $model->crystals ? (int)$model->crystals : null,
            $model->diamonds ? (int)$model->diamonds : null,
            $model->coins ? (int)$model->coins : null,
            (int)$model->available,
            $model->created_at ? new DateTime('@' . $model->created_at) : null,
            $model->updated_at ? new DateTime('@' . $model->updated_at) : null,
            $model->created_by ? new UUID($model->created_by) : null,
            $model->updated_by ? new UUID($model->updated_by) : null,
        );

        return $box;
    }

    public static function PostToDomain($arr): AvailableHero
    {
        $array = $arr["box"];
        $box = Box::create(
            isset($array["id"]) ? new FkId($array["id"]) : null,
            new BoxName((string)$array["name"]),
            new BoxDescription((string)$array["description"]),
            new FkId((string)$array["race_id"]),
            new BoxRatioBooster((string)$array["booster"]),
            isset($array["modifiers"]) ? (int)$array["modifiers"] : null,
            isset($array["crystals"]) ? (int)$array["crystals"] : null,
            isset($array["diamonds"]) ? (int)$array["diamonds"] : null,
            isset($array["coins"]) ? (int)$array["coins"] : null,
            (int)$array["available"],
            isset($array["created_at"]) ? new DateTime('@' . $array["created_at"]) : null,
            isset($array["updated_at"]) ? new DateTime('@' . $array["updated_at"]) : null,
            isset($array["created_by"]) ? new UUID($array["created_by"]) : null,
            isset($array["updated_by"]) ? new UUID($array["updated_by"]) : null
        );

        return $box;
    }

}