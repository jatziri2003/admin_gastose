<?php

use app\models\Tiempo;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\TiempoSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tiempo';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tiempo-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Tiempo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tim_id',
            'tim_descripcion:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Tiempo $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'tim_id' => $model->tim_id]);
                 }
            ],
        ],
    ]); ?>


</div>
