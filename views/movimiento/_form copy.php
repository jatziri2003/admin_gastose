<?php

use yii\helpers\Html;
use app\models\Tservicio;
use app\models\Tmovimiento;
use kartik\date\DatePicker;
use kartik\select2\Select2;
use app\models\Tsuscripcion;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Movimiento $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="movimiento-form">
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <h3>Movimiento</h3>
    <div class="row">
        <div class="col-2">
            <?= $form->field($model, 'mov_fkusuario')->textInput() ?>
        </div>
        <div class="col-2">
            <?=
            $form->field($model, 'mov_fktmov')->widget(Select2::class, [
                'data' => Tmovimiento::map(),
                'language' => 'es',
                'options' => ['placeholder' => 'Seleccione el tipo ...'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]); ?>
        </div>
        <div class="col-4">
            <?= $form->field($model, 'mov_cantidad')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-4">
            <?= $form->field($model, 'mov_fecha')->widget(DatePicker::class, [
                'options' => ['placeholder' => 'Introduce la fecha...', 'value' => date('Y-m-d')],
                'pluginOptions' => [
                    'autoclose' => true,
                    'format' => 'yyyy-mm-dd'
                ]
            ]); ?>
        </div>
        <h3>Servicios</h3>
        <div class="row">
            <div class="col-6">
                <?= $form->field($servicio, 'ser_monto')->textInput(['maxlength' => true]) ?>
            </div>
           
                <div class="col-4">
                    <?= $form->field($servicio, 'ser_fecha_pago')->widget(DatePicker::class, [
                        'options' => ['placeholder' => 'Introduce la fecha...', 'value' => date('Y-m-d')],
                        'pluginOptions' => [
                            'autoclose' => true,
                            'format' => 'yyyy-mm-dd'
                        ]
                    ]); ?>
            </div>
            <div class="col-12">
                <?= $form->field($servicio, 'ser_motivo')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-3">
                <?= $form->field($servicio, 'movimiento_mov_id')->textInput() ?>
            </div>
            <div class="col-9">
                <?=

                $form->field($servicio, 'tipo_servicio_tser_id')->widget(Select2::class, [
                    'data' => Tservicio::map(),
                    'language' => 'es',
                    'options' => ['placeholder' => 'Seleccione el tipo ...'],
                    'pluginOptions' => [
                        'allowClear' => true
                    ],
                ]); ?>
            </div>
            
            <h3>Suscripcion</h3>
            <div class="row">
                <div class="col-md-4">

                    <?= $form->field($suscripcion, 'sus_fktsus')->widget(Select2::class, [
                        'data' => Tsuscripcion::map(),
                        'language' => 'es',
                        'options' => ['placeholder' => 'Seleccione la carrera...'],
                        'pluginOptions' => ['allowClear' => true],
                    ]); ?>

                </div>
                <div class="col-4">
                    <?= $form->field($suscripcion, 'sus_fecha_contratacion')->widget(DatePicker::class, [
                        'options' => ['placeholder' => 'Introduce la fecha...', 'value' => date('Y-m-d')],
                        'pluginOptions' => [
                            'autoclose' => true,
                            'format' => 'yyyy-mm-dd'
                        ]
                    ]); ?>
                </div>
                <div class="col-4">
                    <?= $form->field($suscripcion, 'sus_fecha_vencimiento')->widget(DatePicker::class, [
                        'options' => ['placeholder' => 'Introduce la fecha...', 'value' => date('Y-m-d')],
                        'pluginOptions' => [
                            'autoclose' => true,
                            'format' => 'yyyy-mm-dd'
                        ]
                    ]); ?>
                </div>
                <div class="col-6">
                    <?= $form->field($suscripcion, 'sus_monto')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-6">
                    <?= $form->field($suscripcion, 'sus_fkmov')->textInput() ?>
                </div>



                <div class="form-group">
                    <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
                </div>
            </div>
            <?php ActiveForm::end(); ?>

        </div>