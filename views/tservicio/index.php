<?php

use app\models\Tservicio;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\TservicioSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tservicio';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tservicio-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Tservicio', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tser_id',
            'tser_descripcion:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Tservicio $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'tser_id' => $model->tser_id]);
                 }
            ],
        ],
    ]); ?>


</div>
