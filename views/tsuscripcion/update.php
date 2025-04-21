<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Tsuscripcion $model */

$this->title = 'Update Tsuscripcion: ' . $model->tsus_id;
$this->params['breadcrumbs'][] = ['label' => 'Tsuscripcions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tsus_id, 'url' => ['view', 'tsus_id' => $model->tsus_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tsuscripcion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
