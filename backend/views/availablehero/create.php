<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\availablehero $model */

$this->title = 'Create Availablehero';
$this->params['breadcrumbs'][] = ['label' => 'Availableheroes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="availablehero-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
