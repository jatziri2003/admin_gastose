<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Municipio $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="municipio-form">
<?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>
    
    <div class="row">
        <div class="col-9">

    <?= $form->field($model, 'mun_nombre')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-3">
    <?= $form->field($model, 'mun_fkestado')->textInput() ?>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
