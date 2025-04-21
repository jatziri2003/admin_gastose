<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Usudoc $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="usudoc-form">

<?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>
    
    <div class="row">
        <div class="col-4">

    <?= $form->field($model, 'udo_fkdocumento')->textInput() ?>
    </div>
    <div class="col-4">
    <?= $form->field($model, 'udo_fecha')->textInput() ?>
    </div>
    <div class="col-4">
    <?= $form->field($model, 'udo_estado')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
