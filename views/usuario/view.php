<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Usuario $model */

$this->title = $model->usu_id;
$this->params['breadcrumbs'][] = ['label' => 'Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="usuario-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'usu_id' => $model->usu_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'usu_id' => $model->usu_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'usu_id',
            'usu_nombre',
            'usu_apellidop',
            'usu_apellidom',
            'usu_fecha_nac',
            'usu_sexo',
            'usu_fkcarrera',
            'usu_num_control',
            'usu_fkcolonia',
            'usu_fkuser',
        ],
    ]) ?>

</div>
