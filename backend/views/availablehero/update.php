<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\availablehero $model */

$this->title = 'Update Availablehero: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Availableheroes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="availablehero-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
