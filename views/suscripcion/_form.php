<?php

use yii\helpers\Html;
use kartik\date\DatePicker;
use kartik\select2\Select2;
use app\models\Tsuscripcion;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Suscripcion $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="suscripcion-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <div class="row">
        <div class="col-md-4">

            <?= $form->field($model, 'sus_fktsus')->widget(Select2::class, [
                'data' => Tsuscripcion::map(), // Asegúrate de que la ruta es correcta
                'language' => 'es',
                'options' => ['placeholder' => 'Seleccione la carrera...'],
                'pluginOptions' => ['allowClear' => true],
            ]); ?>

        </div>
        <div class="col-4">
            <?= $form->field($model, 'sus_fecha_contratacion')->widget(DatePicker::class, [
                'options' => ['placeholder' => 'Introduce la fecha...', 'value' => date('Y-m-d')],
                'pluginOptions' => [
                    'autoclose' => true,
                    'format' => 'yyyy-mm-dd'
                ]
            ]); ?>
        </div>
        <div class="col-4">
            <?= $form->field($model, 'sus_fecha_vencimiento')->widget(DatePicker::class, [
                'options' => ['placeholder' => 'Introduce la fecha...', 'value' => date('Y-m-d')],
                'pluginOptions' => [
                    'autoclose' => true,
                    'format' => 'yyyy-mm-dd'
                ]
            ]); ?>
        </div>
        <div class="col-6">
            <?= $form->field($model, 'sus_monto')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-6">
            <?= $form->field($model, 'sus_fkmov')->textInput() ?>
        </div>
        <div class="form-group">
            <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>