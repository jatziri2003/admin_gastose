<?php

use app\models\Dashboard;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\DashboardSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Dashboards';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dashboard-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Dashboard', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'das_id',
            'das_orden',
        [   'attribute' => 'das_imagen',
            'format' => 'raw', 
            'value' => function ($model) {
 
            return " <center>{$model->das_imagen} {$model->img}</center>";
            }
        ],
        
        'das_titulo',
        'das_url',
 
        [ 'attribute' => 'das_estatus', 
        'format' => 'raw',
        'value' => function ($model) {
        return $model->sta;
        }
    ],
        'das_roles' ,
    [    'class' => ActionColumn::className(),
        'urlCreator' => function ($action, Dashboard $model, $key, $index, $column) { 
            return Url::toRoute([$action, 'das_id' => $model->das_id]);
        },
        'contentOptions' => ['style' => 'width: 80px;']
    ],

        ],
    ]); ?>
</div>
