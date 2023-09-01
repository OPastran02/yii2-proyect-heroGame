<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;


/** @var yii\web\View $this */
/** @var common\models\availablehero $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="availablehero-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="container">
        <div class="row">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="row">
            <?= $form->field($model, 'description')->widget(CKEditor::className(),[
                    'editorOptions' => [
                        'preset' => 'full',
                        'inline' => false,
                    ],
                ]) 
            ?>
        </div>
        <div class="row">
            <?= $form->field($model, 'world')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="row">            
            <?= $form->field($model, 'avatar')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="row"> 
            <?= $form->field($model, 'avatarBlock')->textInput(['maxlength' => true]) ?>        
        </div>
        <div class="row">  
            <div class="col">
                <?= $form->field($model, 'race_id')->textInput() ?>
            </div>
            <div class="col">
                <?= $form->field($model, 'rarity_id')->textInput() ?>
            </div>
            <div class="col">
                <?= $form->field($model, 'nature_id')->textInput() ?>
            </div>
            <div class="col">
                <?= $form->field($model, 'type_id')->textInput() ?>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <?= $form->field($model, 'attack_min')->textInput([
                'maxlength' => true,
                'type' => 'number',
                'value' => 2000
                ]) ?>
            </div>
            <div class="col">
                <?= $form->field($model, 'attack_max')->textInput([
                'maxlength' => true,
                'type' => 'number',
                'value' => 4000
                ]) ?>
            </div>
            <div class="col">
                <?= $form->field($model, 'b_attack_min')->textInput([
                'maxlength' => true,
                'type' => 'number',
                'value' => 50
                ]) ?>
            </div>
            <div class="col">
                <?= $form->field($model, 'b_Battack_max')->textInput([
                'maxlength' => true,
                'type' => 'number',
                'value' => 50
                ]) ?>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <?= $form->field($model, 'defense_min')->textInput([
                'maxlength' => true,
                'type' => 'number',
                'value' => 2000
                ]) ?>
            </div>
            <div class="col">
                <?= $form->field($model, 'defense_max')->textInput([
                'maxlength' => true,
                'type' => 'number',
                'value' => 4000
                ]) ?>
            </div>
            <div class="col">
                <?= $form->field($model, 'b_defense_min')->textInput([
                'maxlength' => true,
                'type' => 'number',
                'value' => 50
                ]) ?>
            </div>
            <div class="col">
                <?= $form->field($model, 'b_defense_max')->textInput([
                'maxlength' => true,
                'type' => 'number',
                'value' => 50
                ]) ?>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <?= $form->field($model, 'hp_min')->textInput([
                'maxlength' => true,
                'type' => 'number',
                'value' => 2000
                ]) ?>
            </div>
            <div class="col">
                <?= $form->field($model, 'hp_max')->textInput([
                'maxlength' => true,
                'type' => 'number',
                'value' => 4000
                ]) ?>
            </div>
            <div class="col">
                <?= $form->field($model, 'b_hp_min')->textInput([
                'maxlength' => true,
                'type' => 'number',
                'value' => 50
                ]) ?>
            </div>
            <div class="col">
                <?= $form->field($model, 'b_hp_max')->textInput([
                'maxlength' => true,
                'type' => 'number',
                'value' => 50
                ]) ?>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <?= $form->field($model, 'sp_attack_min')->textInput([
                'maxlength' => true,
                'type' => 'number',
                'value' => 2000
                ]) ?>
            </div>
            <div class="col">
                <?= $form->field($model, 'sp_attack_max')->textInput([
                'maxlength' => true,
                'type' => 'number',
                'value' => 4000
                ]) ?>
            </div>
            <div class="col">
                <?= $form->field($model, 'b_sp_attack_min')->textInput([
                'maxlength' => true,
                'type' => 'number',
                'value' => 50
                ]) ?>
            </div>
            <div class="col">
                <?= $form->field($model, 'b_sp_attack_max')->textInput([
                'maxlength' => true,
                'type' => 'number',
                'value' => 50
                ]) ?>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <?= $form->field($model, 'sp_defense_min')->textInput([
                'maxlength' => true,
                'type' => 'number',
                'value' => 2000
                ]) ?>
            </div>
            <div class="col">
                <?= $form->field($model, 'sp_defense_max')->textInput([
                'maxlength' => true,
                'type' => 'number',
                'value' => 4000
                ]) ?>
            </div>
            <div class="col">
                <?= $form->field($model, 'b_sp_defense_min')->textInput([
                'maxlength' => true,
                'type' => 'number',
                'value' => 50
                ]) ?>
            </div>
            <div class="col">
                <?= $form->field($model, 'b_sp_defense_max')->textInput([
                'maxlength' => true,
                'type' => 'number',
                'value' => 50
                ]) ?>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <?= $form->field($model, 'speed_min')->textInput([
                'maxlength' => true,
                'type' => 'number',
                'value' => 2000
                ]) ?>
            </div>
            <div class="col">
                <?= $form->field($model, 'speed_max')->textInput([
                'maxlength' => true,
                'type' => 'number',
                'value' => 4000
                ]) ?>
            </div>
            <div class="col">
                <?= $form->field($model, 'b_speed_min')->textInput([
                'maxlength' => true,
                'type' => 'number',
                'value' => 50
                ]) ?>
            </div>
            <div class="col">
                <?= $form->field($model, 'b_speed_max')->textInput([
                'maxlength' => true,
                'type' => 'number',
                'value' => 50
                ]) ?>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <?= $form->field($model, 'farming_min')->textInput([
                'maxlength' => true,
                'type' => 'number',
                'value' => 2000
                ]) ?>
            </div>
            <div class="col">
                <?= $form->field($model, 'farming_max')->textInput([
                'maxlength' => true,
                'type' => 'number',
                'value' => 4000
                ]) ?>
            </div>
            <div class="col">
                <?= $form->field($model, 'b_farming_min')->textInput([
                'maxlength' => true,
                'type' => 'number',
                'value' => 50
                ]) ?>
            </div>
            <div class="col">
                <?= $form->field($model, 'b_farming_max')->textInput([
                'maxlength' => true,
                'type' => 'number',
                'value' => 50
                ]) ?>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <?= $form->field($model, 'steeling_min')->textInput([
                'maxlength' => true,
                'type' => 'number',
                'value' => 2000
                ]) ?>
            </div>
            <div class="col">
                <?= $form->field($model, 'steeling_max')->textInput([
                'maxlength' => true,
                'type' => 'number',
                'value' => 4000
                ]) ?>
            </div>
            <div class="col">
                <?= $form->field($model, 'b_steeling_min')->textInput([
                'maxlength' => true,
                'type' => 'number',
                'value' => 50
                ]) ?>
            </div>
            <div class="col">
                <?= $form->field($model, 'b_steeling_max')->textInput([
                'maxlength' => true,
                'type' => 'number',
                'value' => 50
                ]) ?>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <?= $form->field($model, 'wooding_min')->textInput([
                'maxlength' => true,
                'type' => 'number',
                'value' => 2000
                ]) ?>
            </div>
            <div class="col">
                <?= $form->field($model, 'wooding_max')->textInput([
                'maxlength' => true,
                'type' => 'number',
                'value' => 4000
                ]) ?>
            </div>
            <div class="col">
                <?= $form->field($model, 'b_wooding_min')->textInput([
                'maxlength' => true,
                'type' => 'number',
                'value' => 50
                ]) ?>
            </div>
            <div class="col">
                <?= $form->field($model, 'b_wooding_max')->textInput([
                'maxlength' => true,
                'type' => 'number',
                'value' => 50
                ]) ?>
            </div>
        </div>


    <?= $form->field($model, 'available')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
