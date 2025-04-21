<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Usudoc $model */

$this->title = 'Crear Usudoc';
$this->params['breadcrumbs'][] = ['label' => 'Usudoc', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usudoc-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
