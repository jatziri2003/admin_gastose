<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Ahorro $model */

$this->title = 'Actualizar Ahorro: ' . $model->aho_id;
$this->params['breadcrumbs'][] = ['label' => 'Ahorro', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->aho_id, 'url' => ['view', 'aho_id' => $model->aho_id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="ahorro-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
