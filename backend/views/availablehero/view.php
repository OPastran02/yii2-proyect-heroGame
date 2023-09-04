<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use api\Core\AvailableHeroes\Domain\AvailableHero;

/** @var yii\web\View $this */
/** @var common\models\availablehero $model */

$this->title = $model->name()->value();
$this->params['breadcrumbs'][] = ['label' => 'Availableheroes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="availablehero-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id()->value()], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id()->value()], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'attribute' => 'id',
                'value' => $model->id()->value()
            ],
            [
                'attribute' => 'name',
                'value' => $model->name()->value()
            ],
            [
                'attribute' => 'description',
                'value' => $model->description()->value()
            ],
            [
                'attribute' => 'world',
                'value' => $model->world()->value()
            ],
            [
                'attribute' => 'avatar',
                'value' => $model->avatar()->value()
            ],
            [
                'attribute' => 'avatarBlock',
                'value' => $model->avatarBlock()->value()
            ],
            [
                'attribute' => 'race_id',
                'value' => $model->raceId()->value()
            ],
            [
                'attribute' => 'rarity_id',
                'value' => $model->rarityId()->value()
            ],
            [
                'attribute' => 'nature_id',
                'value' => $model->natureId()->value()
            ],
            [
                'attribute' => 'type_id',
                'value' => $model->typeId()->value()
            ],
            [
                'attribute' => 'attack_min',
                'value' => $model->attackMin()->value()
            ],
            [
                'attribute' => 'attack_max',
                'value' => $model->attackMax()->value()
            ],
            [
                'attribute' => 'b_attack_min',
                'value' => $model->bAttackMin()->value()
            ],
            [
                'attribute' => 'b_Battack_max',
                'value' => $model->bAttackMax()->value()
            ],
            [
                'attribute' => 'defense_min',
                'value' => $model->defenseMin()->value()
            ],
            [
                'attribute' => 'defense_max',
                'value' => $model->defenseMax()->value()
            ],
            [
                'attribute' => 'b_defense_min',
                'value' => $model->bDefenseMin()->value()
            ],
            [
                'attribute' => 'b_defense_max',
                'value' => $model->bDefenseMax()->value()
            ],
            [
                'attribute' => 'hp_min',
                'value' => $model->hpMin()->value()
            ],
            [
                'attribute' => 'hp_max',
                'value' => $model->hpMax()->value()
            ],
            [
                'attribute' => 'b_hp_min',
                'value' => $model->bHpMin()->value()
            ],
            [
                'attribute' => 'b_hp_max',
                'value' => $model->bHpMax()->value()
            ],
            [
                'attribute' => 'sp_attack_min',
                'value' => $model->spAttackMin()->value()
            ],
            [
                'attribute' => 'sp_attack_max',
                'value' => $model->spAttackMax()->value()
            ],
            [
                'attribute' => 'b_sp_attack_min',
                'value' => $model->bSpAttackMin()->value()
            ],
            [
                'attribute' => 'b_sp_attack_max',
                'value' => $model->bSpAttackMax()->value()
            ],
            [
                'attribute' => 'sp_defense_min',
                'value' => $model->spDefenseMin()->value()
            ],
            [
                'attribute' => 'sp_defense_max',
                'value' => $model->spDefenseMax()->value()
            ],
            [
                'attribute' => 'b_sp_defense_min',
                'value' => $model->bSpDefenseMin()->value()
            ],
            [
                'attribute' => 'b_sp_defense_max',
                'value' => $model->bSpDefenseMax()->value()
            ],
            [
                'attribute' => 'speed_min',
                'value' => $model->speedMin()->value()
            ],
            [
                'attribute' => 'speed_max',
                'value' => $model->speedMax()->value()
            ],
            [
                'attribute' => 'b_speed_min',
                'value' => $model->bSpeedMin()->value()
            ],
            [
                'attribute' => 'b_speed_max',
                'value' => $model->bSpeedMax()->value()
            ],
            [
                'attribute' => 'farming_min',
                'value' => $model->farmingMin()->value()
            ],
            [
                'attribute' => 'farming_max',
                'value' => $model->farmingMax()->value()
            ],
            [
                'attribute' => 'b_farming_min',
                'value' => $model->bFarmingMin()->value()
            ],
            [
                'attribute' => 'b_farming_max',
                'value' => $model->bFarmingMax()->value()
            ],
            [
                'attribute' => 'steeling_min',
                'value' => $model->steelingMin()->value()
            ],
            [
                'attribute' => 'steeling_max',
                'value' => $model->steelingMax()->value()
            ],
            [
                'attribute' => 'b_steeling_min',
                'value' => $model->bSteelingMin()->value()
            ],
            [
                'attribute' => 'b_steeling_max',
                'value' => $model->bSteelingMax()->value()
            ],
            [
                'attribute' => 'wooding_min',
                'value' => $model->woodingMin()->value()
            ],
            [
                'attribute' => 'wooding_max',
                'value' => $model->woodingMax()->value()
            ],
            [
                'attribute' => 'b_wooding_min',
                'value' => $model->bWoodingMin()->value()
            ],
            [
                'attribute' => 'b_wooding_max',
                'value' => $model->bWoodingMax()->value()
            ],
            [
                'attribute' => 'available',
                'value' => $model->available()
            ],
            [
                'attribute' => 'created_at',
                'value' => $model->createdAt()->format('Y-m-d H:i:s')
            ],
            [
                'attribute' => 'updated_at',
                'value' => $model->updatedAt()->format('Y-m-d H:i:s')
            ],
            [
                'attribute' => 'created_by',
                'value' => (string)$model->createdBy()
            ],
            [
                'attribute' => 'updated_by',
                'value' => (string)$model->updatedBy()
            ],
        ],
    ]) ?>

</div>
