<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\DashboardSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="dashboard-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'das_id') ?>

    <?= $form->field($model, 'das_orden') ?>

    <?= $form->field($model, 'das_imagen') ?>

    <?= $form->field($model, 'das_titulo') ?>

    <?= $form->field($model, 'das_url') ?>

    <?php // echo $form->field($model, 'das_estatus') ?>

    <?php // echo $form->field($model, 'das_roles') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
