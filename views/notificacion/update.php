<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Notificacion $model */

$this->title = 'Actualizar Notificacion: ' . $model->not_id;
$this->params['breadcrumbs'][] = ['label' => 'Notificacion', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->not_id, 'url' => ['view', 'not_id' => $model->not_id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="notificacion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
