<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Tahorro $model */

$this->title = $model->taho_id;
$this->params['breadcrumbs'][] = ['label' => 'Tahorro', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tahorro-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'taho_id' => $model->taho_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'taho_id' => $model->taho_id], [
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
            'taho_id',
            'taho_descripcion:ntext',
            'taho_monto_min',
            'taho_monto_max',
        ],
    ]) ?>

</div>
