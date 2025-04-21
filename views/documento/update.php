<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Documento $model */

$this->title = 'Actualizar Documento: ' . $model->doc_id;
$this->params['breadcrumbs'][] = ['label' => 'Documento', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->doc_id, 'url' => ['view', 'doc_id' => $model->doc_id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="documento-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
