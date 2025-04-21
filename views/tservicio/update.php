<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Tservicio $model */

$this->title = 'Actualizar Tservicio: ' . $model->tser_id;
$this->params['breadcrumbs'][] = ['label' => 'Tservicio', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tser_id, 'url' => ['view', 'tser_id' => $model->tser_id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="tservicio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
