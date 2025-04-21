<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Cuenta $model */

$this->title = 'Crear Cuenta';
$this->params['breadcrumbs'][] = ['label' => 'Cuenta', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cuenta-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
