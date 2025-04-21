<?php

use app\models\Servicio;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\ServicioSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Servicio';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="servicio-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Servicio', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ser_id',
            'ser_monto',
            'ser_fecha_pago',
            'ser_motivo',
            'movimiento_mov_id',
            //'tipo_servicio_tser_id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Servicio $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ser_id' => $model->ser_id]);
                 }
            ],
        ],
    ]); ?>


</div>
