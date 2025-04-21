<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Servicio $model */

$this->title = 'Actualizar Servicio: ' . $model->ser_id;
$this->params['breadcrumbs'][] = ['label' => 'Servicio', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ser_id, 'url' => ['view', 'ser_id' => $model->ser_id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="servicio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
