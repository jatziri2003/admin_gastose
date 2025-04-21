<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ColoniaSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="colonia-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'col_id') ?>

    <?= $form->field($model, 'col_nombre') ?>

    <?= $form->field($model, 'col_fkmunicipio') ?>

    <?= $form->field($model, 'col_asentamiento') ?>

    <?= $form->field($model, 'col_codigo_postal') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
