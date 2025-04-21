<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\UsuarioSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="usuario-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'usu_id') ?>

    <?= $form->field($model, 'usu_nombre') ?>

    <?= $form->field($model, 'usu_apellidop') ?>

    <?= $form->field($model, 'usu_apellidom') ?>

    <?= $form->field($model, 'usu_fecha_nac') ?>

    <?php // echo $form->field($model, 'usu_sexo') ?>

    <?php // echo $form->field($model, 'usu_fkcarrera') ?>

    <?php // echo $form->field($model, 'usu_num_control') ?>

    <?php // echo $form->field($model, 'usu_fkcolonia') ?>

    <?php // echo $form->field($model, 'usu_fkuser') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
