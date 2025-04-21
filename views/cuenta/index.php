<?php

use app\models\Cuenta;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\CuentaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Cuenta';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cuenta-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Cuenta', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'cue_id',
            'cue_num_tarjeta',
            'cue_tipo_tarjeta',
            'cue_fkusuario',
            'cue_fkban',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Cuenta $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'cue_id' => $model->cue_id]);
                 }
            ],
        ],
    ]); ?>


</div>
