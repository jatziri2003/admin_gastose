<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Ahorro $model */

$this->title = $model->aho_id;
$this->params['breadcrumbs'][] = ['label' => 'Ahorro', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ahorro-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'aho_id' => $model->aho_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'aho_id' => $model->aho_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Estás seguro de eliminar este ahorro?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'aho_id',
            'aho_cantidad',
            'aho_fktaho',
            'aho_fkusuario',
            'aho_fktiempo',
        ],
    ]) ?>

</div>
