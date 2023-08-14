<?php

use common\models\availablehero;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\availablehero\Search\availableheroSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Availableheroes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="availablehero-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Availablehero', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'description:ntext',
            'world:ntext',
            'avatar',
            //'avatarBlock',
            //'race_id',
            //'rarity_id',
            //'nature_id',
            //'type_id',
            //'attack_min',
            //'attack_max',
            //'b_attack_min',
            //'b_Battack_max',
            //'defense_min',
            //'defense_max',
            //'b_defense_min',
            //'b_defense_max',
            //'hp_min',
            //'hp_max',
            //'b_hp_min',
            //'b_hp_max',
            //'sp_attack_min',
            //'sp_attack_max',
            //'b_sp_attack_min',
            //'b_sp_attack_max',
            //'sp_defense_min',
            //'sp_defense_max',
            //'b_sp_defense_min',
            //'b_sp_defense_max',
            //'speed_min',
            //'speed_max',
            //'b_speed_min',
            //'b_speed_max',
            //'farming_min',
            //'farming_max',
            //'b_farming_min',
            //'b_farming_max',
            //'steeling_min',
            //'steeling_max',
            //'b_steeling_min',
            //'b_steeling_max',
            //'wooding_min',
            //'wooding_max',
            //'b_wooding_min',
            //'b_wooding_max',
            //'available',
            //'created_at',
            //'updated_at',
            //'created_by',
            //'updated_by',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, availablehero $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
