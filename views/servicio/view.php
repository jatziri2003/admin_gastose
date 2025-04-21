<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Servicio $model */

$this->title = $model->ser_id;
$this->params['breadcrumbs'][] = ['label' => 'Servicio', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="servicio-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'ser_id' => $model->ser_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'ser_id' => $model->ser_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Estás seguro de eliminar este tipo de servicio?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ser_id',
            'ser_monto',
            'ser_fecha_pago',
            'ser_motivo',
            'movimiento_mov_id',
            'tipo_servicio_tser_id',
        ],
    ]) ?>

</div>
