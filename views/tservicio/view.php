<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Tservicio $model */

$this->title = $model->tser_id;
$this->params['breadcrumbs'][] = ['label' => 'Tservicio', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tservicio-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'tser_id' => $model->tser_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'tser_id' => $model->tser_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Esta seguiro de eliminar este registro?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'tser_id',
            'tser_descripcion:ntext',
        ],
    ]) ?>

</div>
