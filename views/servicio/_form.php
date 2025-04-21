<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Servicio $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="servicio-form">

    <div class="row">
        <div class="col-12"><?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>
    
    <div class="row">
        <div class="col-6">
    <?= $form->field($model, 'ser_monto')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-6">
    <?= $form->field($model, 'ser_fecha_pago')->textInput() ?>
    </div>
    <div class="col-12">
    <?= $form->field($model, 'ser_motivo')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-3">
    <?= $form->field($model, 'movimiento_mov_id')->textInput() ?>
    </div>
    <div class="col-9">
    <?= $form->field($model, 'tipo_servicio_tser_id')->textInput() ?>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
