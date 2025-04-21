<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Tiempo $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tiempo-form">
<?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>
    
    <div class="row">
        <div class="col-12">

    <?= $form->field($model, 'tim_descripcion')->textarea(['rows' => 6]) ?>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
