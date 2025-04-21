<?php

use yii\helpers\Html;
use kartik\file\FileInput;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Carrera $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="carrera-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>
    
    <div class="row">
        <div class="col-12">
            <?= $form->field($model, 'car_nombre')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'car_semestres')->textInput() ?>
        </div>
        <div class="col">
            <?= $form->field($model, 'car_clave')->textInput(['maxlength' => true]) ?>
        </div>
        <?= $form->field($model, 'imagen')->widget(FileInput::classname(), [
              'options' => ['accept' => 'imagen/*'],
               'pluginOptions'=>['allowedFileExtensions'=>['jpg','png'],'showUpload' => false,],
          ]);   ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
