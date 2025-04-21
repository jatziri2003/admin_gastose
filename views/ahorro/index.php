<?php

use app\models\Ahorro;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\AhorroSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Ahorro';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ahorro-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Ahorro', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'aho_id',
            'aho_cantidad',
            'aho_fktaho',
            'aho_fkusuario',
            'aho_fktiempo',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Ahorro $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'aho_id' => $model->aho_id]);
                 }
            ],
        ],
    ]); ?>


</div>
