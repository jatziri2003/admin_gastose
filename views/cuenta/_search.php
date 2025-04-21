<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\CuentaSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="cuenta-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'cue_id') ?>

    <?= $form->field($model, 'cue_num_tarjeta') ?>

    <?= $form->field($model, 'cue_tipo_tarjeta') ?>

    <?= $form->field($model, 'cue_fkusuario') ?>

    <?= $form->field($model, 'cue_fkban') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
