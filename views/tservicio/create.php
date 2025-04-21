<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Tservicio $model */

$this->title = 'Crear Tservicio';
$this->params['breadcrumbs'][] = ['label' => 'Tservicio', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tservicio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
