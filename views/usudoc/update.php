<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Usudoc $model */

$this->title = 'Actualizar Usudoc: ' . $model->udo_fkusuario;
$this->params['breadcrumbs'][] = ['label' => 'Usudoc', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->udo_fkusuario, 'url' => ['view', 'udo_fkusuario' => $model->udo_fkusuario, 'udo_fkdocumento' => $model->udo_fkdocumento]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="usudoc-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
