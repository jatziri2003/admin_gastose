<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Tahorro $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tahorro-form">
<?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>
    
    <div class="row">
        <div class="col-12">

    <?= $form->field($model, 'taho_descripcion')->textarea(['rows' => 6]) ?>
    </div>
    <div class="col-6">
    <?= $form->field($model, 'taho_monto_min')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-6">
    <?= $form->field($model, 'taho_monto_max')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
