<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Suscripcion $model */

$this->title = 'Actualizar Suscripcion: ' . $model->sus_id;
$this->params['breadcrumbs'][] = ['label' => 'Suscripcion', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->sus_id, 'url' => ['view', 'sus_id' => $model->sus_id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="suscripcion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
