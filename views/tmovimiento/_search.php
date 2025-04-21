<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TmovimientoSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tmovimiento-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'tmov_id') ?>

    <?= $form->field($model, 'tmov_descripcion') ?>

    <?= $form->field($model, 'tmov_monto_min') ?>

    <?= $form->field($model, 'tmov_monto_max') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
