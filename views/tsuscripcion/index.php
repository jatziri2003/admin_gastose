<?php

use app\models\Tsuscripcion;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\TsuscripcionSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tsuscripcions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tsuscripcion-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tsuscripcion', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tsus_id',
            'tsus_descripcion',
            'tsus_plan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Tsuscripcion $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'tsus_id' => $model->tsus_id]);
                 }
            ],
        ],
    ]); ?>


</div>
