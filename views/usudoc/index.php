<?php

use app\models\Usudoc;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\UsudocSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Usudoc';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usudoc-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Usudoc', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'udo_fkusuario',
            'udo_fkdocumento',
            'udo_fecha',
            'udo_estado',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Usudoc $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'udo_fkusuario' => $model->udo_fkusuario, 'udo_fkdocumento' => $model->udo_fkdocumento]);
                 }
            ],
        ],
    ]); ?>


</div>
