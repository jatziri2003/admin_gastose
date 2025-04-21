<?php

use yii\helpers\Html;
use kartik\file\FileInput;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Documento $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="documento-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'doc_tipo_doc')->dropDownList([
                'Referencia' => 'Referencia',
                'Boucher' => 'Boucher',
            ], ['prompt' => 'Seleccione un tipo']) ?>
        </div>
        
    

    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'imagen')->widget(FileInput::classname(), [
                'options' => ['accept' => 'image/*'],
                'pluginOptions' => [
                    'allowedFileExtensions' => ['jpg', 'png'],
                    'showUpload' => false,
                ],
            ]); ?>
        </div>
    </div>

    <div class="form-group mt-3">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
