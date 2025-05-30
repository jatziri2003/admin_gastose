<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ServicioSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="servicio-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ser_id') ?>

    <?= $form->field($model, 'ser_monto') ?>

    <?= $form->field($model, 'ser_fecha_pago') ?>

    <?= $form->field($model, 'ser_motivo') ?>

    <?= $form->field($model, 'movimiento_mov_id') ?>

    <?php // echo $form->field($model, 'tipo_servicio_tser_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
