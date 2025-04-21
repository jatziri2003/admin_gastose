<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Cuenta $model */

$this->title = 'Actualizar Cuenta: ' . $model->cue_id;
$this->params['breadcrumbs'][] = ['label' => 'Cuenta', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cue_id, 'url' => ['view', 'cue_id' => $model->cue_id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="cuenta-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
