<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Tmovimiento $model */

$this->title = 'Actualizar Tmovimiento: ' . $model->tmov_id;
$this->params['breadcrumbs'][] = ['label' => 'Tmovimiento', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tmov_id, 'url' => ['view', 'tmov_id' => $model->tmov_id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="tmovimiento-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
