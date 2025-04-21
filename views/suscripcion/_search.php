<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\SuscripcionSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="suscripcion-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'sus_id') ?>

    <?= $form->field($model, 'sus_fktsus') ?>

    <?= $form->field($model, 'sus_fecha_contratacion') ?>

    <?= $form->field($model, 'sus_fecha_vencimiento') ?>

    <?= $form->field($model, 'sus_monto') ?>

    <?php // echo $form->field($model, 'sus_fkmov') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
