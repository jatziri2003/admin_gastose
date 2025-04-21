<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\MovimientoSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="movimiento-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'mov_id') ?>

    <?= $form->field($model, 'mov_fkusuario') ?>

    <?= $form->field($model, 'mov_fktmov') ?>

    <?= $form->field($model, 'mov_cantidad') ?>

    <?= $form->field($model, 'mov_fecha') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
