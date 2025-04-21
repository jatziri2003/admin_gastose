<?php

use yii\helpers\Html;
use yii\widgets\DetailView;


/** @var yii\web\View $this */
/** @var app\models\Dashboard $model */

$this->title = $model->das_id;
$this->params['breadcrumbs'][] = ['label' => 'Dashboards', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="dashboard-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'das_id' => $model->das_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'das_id' => $model->das_id], [
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

            'das_id',
            'das_orden',
            [
                'attribute' => 'das_imagen',
                'format' => 'raw',
                'value' => function ($model) {
                    return "{$model->das_imagen}<br><div style='width: 30%;'>{$model->img}</div>";
                }
            ],
            'das_titulo',
            'das_url',
            [
                'attribute' => 'das_estatus',
                'format' => 'raw',
                'value' => function ($model) {
                    return "<div style='width: 30%;'>{$model->sta}</div>";
                }
            ],
            'das_roles',



        ],
    ]) ?>

</div>