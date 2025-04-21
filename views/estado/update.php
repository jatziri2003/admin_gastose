<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Estado $model */

$this->title = 'Actualizar Estado: ' . $model->est_id;
$this->params['breadcrumbs'][] = ['label' => 'Estado', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->est_id, 'url' => ['view', 'est_id' => $model->est_id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="estado-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
