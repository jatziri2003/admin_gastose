<?php

use app\models\Suscripcion;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\SuscripcionSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Suscripcion';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="suscripcion-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Suscripcion', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'sus_id',
            'sus_fktsus',
            'sus_fecha_contratacion',
            'sus_fecha_vencimiento',
            'sus_monto',
            //'sus_fkmov',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Suscripcion $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'sus_id' => $model->sus_id]);
                 }
            ],
        ],
    ]); ?>


</div>
