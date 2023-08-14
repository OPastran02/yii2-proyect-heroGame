<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\availablehero\Search\availableheroSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="availablehero-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'world') ?>

    <?= $form->field($model, 'avatar') ?>

    <?php // echo $form->field($model, 'avatarBlock') ?>

    <?php // echo $form->field($model, 'race_id') ?>

    <?php // echo $form->field($model, 'rarity_id') ?>

    <?php // echo $form->field($model, 'nature_id') ?>

    <?php // echo $form->field($model, 'type_id') ?>

    <?php // echo $form->field($model, 'attack_min') ?>

    <?php // echo $form->field($model, 'attack_max') ?>

    <?php // echo $form->field($model, 'b_attack_min') ?>

    <?php // echo $form->field($model, 'b_Battack_max') ?>

    <?php // echo $form->field($model, 'defense_min') ?>

    <?php // echo $form->field($model, 'defense_max') ?>

    <?php // echo $form->field($model, 'b_defense_min') ?>

    <?php // echo $form->field($model, 'b_defense_max') ?>

    <?php // echo $form->field($model, 'hp_min') ?>

    <?php // echo $form->field($model, 'hp_max') ?>

    <?php // echo $form->field($model, 'b_hp_min') ?>

    <?php // echo $form->field($model, 'b_hp_max') ?>

    <?php // echo $form->field($model, 'sp_attack_min') ?>

    <?php // echo $form->field($model, 'sp_attack_max') ?>

    <?php // echo $form->field($model, 'b_sp_attack_min') ?>

    <?php // echo $form->field($model, 'b_sp_attack_max') ?>

    <?php // echo $form->field($model, 'sp_defense_min') ?>

    <?php // echo $form->field($model, 'sp_defense_max') ?>

    <?php // echo $form->field($model, 'b_sp_defense_min') ?>

    <?php // echo $form->field($model, 'b_sp_defense_max') ?>

    <?php // echo $form->field($model, 'speed_min') ?>

    <?php // echo $form->field($model, 'speed_max') ?>

    <?php // echo $form->field($model, 'b_speed_min') ?>

    <?php // echo $form->field($model, 'b_speed_max') ?>

    <?php // echo $form->field($model, 'farming_min') ?>

    <?php // echo $form->field($model, 'farming_max') ?>

    <?php // echo $form->field($model, 'b_farming_min') ?>

    <?php // echo $form->field($model, 'b_farming_max') ?>

    <?php // echo $form->field($model, 'steeling_min') ?>

    <?php // echo $form->field($model, 'steeling_max') ?>

    <?php // echo $form->field($model, 'b_steeling_min') ?>

    <?php // echo $form->field($model, 'b_steeling_max') ?>

    <?php // echo $form->field($model, 'wooding_min') ?>

    <?php // echo $form->field($model, 'wooding_max') ?>

    <?php // echo $form->field($model, 'b_wooding_min') ?>

    <?php // echo $form->field($model, 'b_wooding_max') ?>

    <?php // echo $form->field($model, 'available') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
