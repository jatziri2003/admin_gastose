<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Tahorro $model */

$this->title = 'Crear Tahorro';
$this->params['breadcrumbs'][] = ['label' => 'Tahorro', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tahorro-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
