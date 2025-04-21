<?php

use app\models\Tahorro;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\TahorroSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tahorro';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tahorro-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Tahorro', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'taho_id',
            'taho_descripcion:ntext',
            'taho_monto_min',
            'taho_monto_max',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Tahorro $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'taho_id' => $model->taho_id]);
                 }
            ],
        ],
    ]); ?>


</div>
