<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Usuario $model */

// Título dinámico según el rol
$this->title = Yii::$app->user->can('admin') ? 
    'Actualizar Usuario: ' . $model->usu_id : 
    'Actualizar Mi Perfil';

$this->params['breadcrumbs'][] = ['label' => 'Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->usu_id, 'url' => ['view', 'usu_id' => $model->usu_id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="usuario-update">
    <h1><?= Html::encode($this->title) ?></h1>
    <?= $this->render('_form', [
        'model' => $model,
        'user'=> $user,
    ]) ?>
</div>