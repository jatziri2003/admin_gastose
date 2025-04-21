<?php

use yii\helpers\Html;
use app\models\Tahorro;
use app\models\Tiempo;
use kartik\select2\Select2;
use yii\bootstrap5\ActiveForm;
/** @var yii\web\View $this */
/** @var app\models\Ahorro $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="ahorro-form">

 
    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>
    <div class="row">
        <div class="col-3">
            <?= $form->field($model, 'aho_cantidad')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-3">
             <?= 
             
             $form->field($model, 'aho_fktaho')->widget(Select2::class, [
                    'data' => Tahorro::map(),
                    'language' => 'es',
                    'options' => ['placeholder' => 'Seleccione el tipo ...'],
                    'pluginOptions' => [
                        'allowClear' => true
                    ],
                ]); ?>
         </div>
        <div class="col-3">
            <?= $form->field($model, 'aho_fkusuario')->textInput() ?>
            </div>
            <div class="col">
            <?= 
             
             $form->field($model, 'aho_fktiempo')->widget(Select2::class, [
                    'data' => Tiempo::map(),
                    'language' => 'es',
                    'options' => ['placeholder' => 'Seleccione el tipo ...'],
                    'pluginOptions' => [
                        'allowClear' => true
                    ],
                ]); ?>
            </div>
        <div class="form-group">
            <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
