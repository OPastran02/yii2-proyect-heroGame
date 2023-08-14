<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\availablehero $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="availablehero-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'world')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'avatar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'avatarBlock')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'race_id')->textInput() ?>

    <?= $form->field($model, 'rarity_id')->textInput() ?>

    <?= $form->field($model, 'nature_id')->textInput() ?>

    <?= $form->field($model, 'type_id')->textInput() ?>

    <?= $form->field($model, 'attack_min')->textInput() ?>

    <?= $form->field($model, 'attack_max')->textInput() ?>

    <?= $form->field($model, 'b_attack_min')->textInput() ?>

    <?= $form->field($model, 'b_Battack_max')->textInput() ?>

    <?= $form->field($model, 'defense_min')->textInput() ?>

    <?= $form->field($model, 'defense_max')->textInput() ?>

    <?= $form->field($model, 'b_defense_min')->textInput() ?>

    <?= $form->field($model, 'b_defense_max')->textInput() ?>

    <?= $form->field($model, 'hp_min')->textInput() ?>

    <?= $form->field($model, 'hp_max')->textInput() ?>

    <?= $form->field($model, 'b_hp_min')->textInput() ?>

    <?= $form->field($model, 'b_hp_max')->textInput() ?>

    <?= $form->field($model, 'sp_attack_min')->textInput() ?>

    <?= $form->field($model, 'sp_attack_max')->textInput() ?>

    <?= $form->field($model, 'b_sp_attack_min')->textInput() ?>

    <?= $form->field($model, 'b_sp_attack_max')->textInput() ?>

    <?= $form->field($model, 'sp_defense_min')->textInput() ?>

    <?= $form->field($model, 'sp_defense_max')->textInput() ?>

    <?= $form->field($model, 'b_sp_defense_min')->textInput() ?>

    <?= $form->field($model, 'b_sp_defense_max')->textInput() ?>

    <?= $form->field($model, 'speed_min')->textInput() ?>

    <?= $form->field($model, 'speed_max')->textInput() ?>

    <?= $form->field($model, 'b_speed_min')->textInput() ?>

    <?= $form->field($model, 'b_speed_max')->textInput() ?>

    <?= $form->field($model, 'farming_min')->textInput() ?>

    <?= $form->field($model, 'farming_max')->textInput() ?>

    <?= $form->field($model, 'b_farming_min')->textInput() ?>

    <?= $form->field($model, 'b_farming_max')->textInput() ?>

    <?= $form->field($model, 'steeling_min')->textInput() ?>

    <?= $form->field($model, 'steeling_max')->textInput() ?>

    <?= $form->field($model, 'b_steeling_min')->textInput() ?>

    <?= $form->field($model, 'b_steeling_max')->textInput() ?>

    <?= $form->field($model, 'wooding_min')->textInput() ?>

    <?= $form->field($model, 'wooding_max')->textInput() ?>

    <?= $form->field($model, 'b_wooding_min')->textInput() ?>

    <?= $form->field($model, 'b_wooding_max')->textInput() ?>

    <?= $form->field($model, 'available')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'updated_by')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
