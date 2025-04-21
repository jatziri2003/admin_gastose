<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Tsuscripcion $model */

$this->title = 'Create Tsuscripcion';
$this->params['breadcrumbs'][] = ['label' => 'Tsuscripcions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tsuscripcion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
