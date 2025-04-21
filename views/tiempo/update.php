<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Tiempo $model */

$this->title = 'Actualizar Tiempo: ' . $model->tim_id;
$this->params['breadcrumbs'][] = ['label' => 'Tiempo', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tim_id, 'url' => ['view', 'tim_id' => $model->tim_id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="tiempo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
