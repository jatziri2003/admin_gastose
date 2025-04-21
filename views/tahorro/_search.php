<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TahorroSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tahorro-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'taho_id') ?>

    <?= $form->field($model, 'taho_descripcion') ?>

    <?= $form->field($model, 'taho_monto_min') ?>

    <?= $form->field($model, 'taho_monto_max') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
