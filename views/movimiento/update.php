<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Movimiento $model */

$this->title = 'Actualizar Movimiento: ' . $model->mov_id;
$this->params['breadcrumbs'][] = ['label' => 'Movimiento', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->mov_id, 'url' => ['view', 'mov_id' => $model->mov_id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="movimiento-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
