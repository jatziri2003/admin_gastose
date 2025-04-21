<?php

use app\models\Banco;
use yii\helpers\Html;
use kartik\select2\Select2;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Cuenta $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="cuenta-form">

<?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>
    
    <div class="row">
        <div class="col-6">

    <?= $form->field($model, 'cue_num_tarjeta')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-3">
    <?= $form->field($model, 'cue_fkusuario')->textInput() ?>
    </div>
    <div class="col-3">
    <?=
            $form->field($model, 'cue_fkban')->widget(Select2::class, [
                'data' => Banco::map(),
                'language' => 'es',
                'options' => ['placeholder' => 'Seleccione el tipo ...'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]); ?>
    </div>
    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>
    
        <div class="col-12">
    <?= $form->field($model, 'cue_tipo_tarjeta')->dropDownList([ 'Debito' => 'Debito', 'Credito' => 'Credito', ], ['prompt' => '']) ?>
    </div>
    
    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
