<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use api\Core\AvailableHeroes\Domain\AvailableHero;

/** @var yii\web\View $this */
/** @var common\models\availablehero $model */

$this->title = $model['name'];
$this->params['breadcrumbs'][] = ['label' => 'Availableheroes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="availablehero-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model['id']], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model['id']], [
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
            'id',
            'name',
            'description',
            'world',
            'avatar',
            'avatarBlock',
            'race_id',
            'rarity_id',
            'nature_id',
            'type_id',
            'attack_min',
            'attack_max',
            'b_attack_min',
            'b_Battack_max',
            'defense_min',
            'defense_max',
            'b_defense_min',
            'b_defense_max',
            'hp_min',
            'hp_max',
            'b_hp_min',
            'b_hp_max',
            'sp_attack_min',
            'sp_attack_max',
            'b_sp_attack_min',
            'b_sp_attack_max',
            'sp_defense_min',
            'sp_defense_max',
            'b_sp_defense_min',
            'b_sp_defense_max',
            'speed_min',
            'speed_max',
            'b_speed_min',
            'b_speed_max',
            'farming_min',
            'farming_max',
            'b_farming_min',
            'b_farming_max',
            'steeling_min',
            'steeling_max',
            'b_steeling_min',
            'b_steeling_max',
            'wooding_min',
            'wooding_max',
            'b_wooding_min',
            'b_wooding_max',
            'available',
            'created_at',
            'updated_at',
            'created_by',
            'updated_by',
        ],
    ]) ?>

</div>
