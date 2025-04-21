<?php

use app\models\Notificacion;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\NotificacionSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Notificacion';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="notificacion-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Notificacion', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'not_id',
            'not_alerta:ntext',
            'not_fktmov',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Notificacion $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'not_id' => $model->not_id]);
                 }
            ],
        ],
    ]); ?>


</div>
