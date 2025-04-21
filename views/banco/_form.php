<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Banco $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="banco-form">

<?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>
    
    <div class="row">
        <div class="col-3">
    <?= $form->field($model, 'ban_nombre')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-9">
    <?= $form->field($model, 'ban_descripcion')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
