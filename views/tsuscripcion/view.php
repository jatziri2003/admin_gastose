<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Tsuscripcion $model */

$this->title = $model->tsus_id;
$this->params['breadcrumbs'][] = ['label' => 'Tsuscripcions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tsuscripcion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'tsus_id' => $model->tsus_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'tsus_id' => $model->tsus_id], [
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
            'tsus_id',
            'tsus_descripcion',
            'tsus_plan',
        ],
    ]) ?>

</div>
