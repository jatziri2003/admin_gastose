<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Suscripcion $model */

$this->title = 'Crear Suscripcion';
$this->params['breadcrumbs'][] = ['label' => 'Suscripcion', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="suscripcion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
