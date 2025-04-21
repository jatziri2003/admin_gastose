<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Ahorro $model */

$this->title = 'Crear Ahorro';
$this->params['breadcrumbs'][] = ['label' => 'Ahorro', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ahorro-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
