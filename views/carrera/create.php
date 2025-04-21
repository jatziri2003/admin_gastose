<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Carrera $model */

$this->title = 'Crear Carrera';
$this->params['breadcrumbs'][] = ['label' => 'Carrera', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carrera-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
