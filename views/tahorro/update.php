<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Tahorro $model */

$this->title = 'Actualizar Tahorro: ' . $model->taho_id;
$this->params['breadcrumbs'][] = ['label' => 'Tahorro', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->taho_id, 'url' => ['view', 'taho_id' => $model->taho_id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="tahorro-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
