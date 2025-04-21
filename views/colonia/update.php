<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Colonia $model */

$this->title = 'Actualizar Colonia: ' . $model->col_id;
$this->params['breadcrumbs'][] = ['label' => 'Colonia', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->col_id, 'url' => ['view', 'col_id' => $model->col_id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="colonia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
