<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Cuenta $model */

$this->title = $model->cue_id;
$this->params['breadcrumbs'][] = ['label' => 'Cuenta', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="cuenta-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'cue_id' => $model->cue_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'cue_id' => $model->cue_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Estás seguro de eliminar esta cuenta?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'cue_id',
            'cue_num_tarjeta',
            'cue_tipo_tarjeta',
            'cue_fkusuario',
            'cue_fkban',
        ],
    ]) ?>

</div>
