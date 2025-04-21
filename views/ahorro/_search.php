<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\AhorroSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="ahorro-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'aho_id') ?>

    <?= $form->field($model, 'aho_cantidad') ?>

    <?= $form->field($model, 'aho_fktaho') ?>

    <?= $form->field($model, 'aho_fkusuario') ?>

    <?= $form->field($model, 'aho_fktiempo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
