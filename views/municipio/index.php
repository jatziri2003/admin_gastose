<?php

use app\models\Municipio;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\MunicipioSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Municipio';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="municipio-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Municipio', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'mun_id',
            'mun_nombre',
            'mun_fkestado',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Municipio $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'mun_id' => $model->mun_id]);
                 }
            ],
        ],
    ]); ?>


</div>
