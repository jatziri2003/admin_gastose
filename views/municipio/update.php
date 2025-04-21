<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Municipio $model */

$this->title = 'Actualizar Municipio: ' . $model->mun_id;
$this->params['breadcrumbs'][] = ['label' => 'Municipio', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->mun_id, 'url' => ['view', 'mun_id' => $model->mun_id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="municipio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
