<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Suscripcion $model */

$this->title = $model->sus_id;
$this->params['breadcrumbs'][] = ['label' => 'Suscripcion', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="suscripcion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'sus_id' => $model->sus_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'sus_id' => $model->sus_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Estás seguro de eliminar este tipo de suscripción?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'sus_id',
            'sus_fktsus',
            'sus_fecha_contratacion',
            'sus_fecha_vencimiento',
            'sus_monto',
            'sus_fkmov',
        ],
    ]) ?>

</div>
