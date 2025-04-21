<?php

use app\models\Carrera;
use app\models\Colonia;
use yii\helpers\Html;
use kartik\date\DatePicker;
use kartik\select2\Select2;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Usuario $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="usuario-form">
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <div class="row">
        <div class="col-md-4">
            <?= $form->field($user, 'username')->textInput(['maxlength' => true, 'disabled'=>!$model->isNewRecord]) ?>
        </div>
        <?php if ($model->isNewRecord): ?>
            <?= $form->field($user, 'password')->passwordInput(['maxlength' => 255, 'autocomplete' => 'off']) ?>
            <?= $form->field($user, 'repeat_password')->passwordInput(['maxlength' => 255, 'autocomplete' => 'off']) ?>
        <?php endif; ?>
        <?= $form->field($user, 'email')->textInput(['maxlength' => 255]) ?>
    </div>


        <div class="col-md-4">
            <?= $form->field($model, 'usu_nombre')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'usu_apellidop')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'usu_apellidom')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'usu_fecha_nac')->widget(DatePicker::class, [
                'options' => ['placeholder' => 'Introduce la fecha de nacimiento...', 'value' => date('Y-m-d')],
                'pluginOptions' => [
                    'autoclose' => true,
                    'format' => 'yyyy-mm-dd'
                ]
            ]); ?>
        </div>
        <div class="col-md-1">
            <?= $form->field($model, 'usu_sexo')->dropDownList(['M' => 'M', 'F' => 'F',], ['prompt' => '']) ?>
        </div>
        <div class="col-md-5">
            <?=
            $form->field($model, 'usu_fkcarrera')->widget(Select2::class, [
                'data' => Carrera::map(),
                'language' => 'es',
                'options' => ['placeholder' => 'Seleccione el tipo ...'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]); ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'usu_num_control')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'usu_fkcolonia')->widget(Select2::class, [
                'data' => Colonia::map(),
                'language' => 'es',
                'options' => ['placeholder' => 'Seleccione la colonia...'],
                'pluginOptions' => [
                    'allowClear' => true,
                ],
            ]); ?>
        </div>
        
        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>