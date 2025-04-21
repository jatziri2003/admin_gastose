<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Tmovimiento $model */

$this->title = $model->tmov_id;
$this->params['breadcrumbs'][] = ['label' => 'Tmovimiento', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tmovimiento-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'tmov_id' => $model->tmov_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'tmov_id' => $model->tmov_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Esta seguiro de eliminar este registro?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'tmov_id',
            'tmov_descripcion:ntext',
            'tmov_monto_min',
            'tmov_monto_max',
        ],
    ]) ?>

</div>
