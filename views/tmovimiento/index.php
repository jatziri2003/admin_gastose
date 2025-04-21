<?php

use app\models\Tmovimiento;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\TmovimientoSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tmovimiento';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tmovimiento-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Tmovimiento', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tmov_id',
            'tmov_descripcion:ntext',
            'tmov_monto_min',
            'tmov_monto_max',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Tmovimiento $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'tmov_id' => $model->tmov_id]);
                 }
            ],
        ],
    ]); ?>


</div>
