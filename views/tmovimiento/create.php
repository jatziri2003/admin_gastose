<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Tmovimiento $model */

$this->title = 'Crear Tmovimiento';
$this->params['breadcrumbs'][] = ['label' => 'Tmovimiento', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tmovimiento-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
