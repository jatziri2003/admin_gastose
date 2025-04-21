<?php

use yii\helpers\Html;

use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Colonia $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="colonia-form">
<?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>
    
    <div class="row">
        <div class="col-12">
    <?= $form->field($model, 'col_nombre')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-6">
    <?= $form->field($model, 'col_fkmunicipio')->textInput() ?>
    </div>
    <div class="col-3">
    <?= $form->field($model, 'col_asentamiento')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-3">
    <?= $form->field($model, 'col_codigo_postal')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
