<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\UsudocSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="usudoc-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'udo_fkusuario') ?>

    <?= $form->field($model, 'udo_fkdocumento') ?>

    <?= $form->field($model, 'udo_fecha') ?>

    <?= $form->field($model, 'udo_estado') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
