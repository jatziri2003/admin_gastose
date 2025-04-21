<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Usudoc $model */

$this->title = $model->udo_fkusuario;
$this->params['breadcrumbs'][] = ['label' => 'Usudoc', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="usudoc-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'udo_fkusuario' => $model->udo_fkusuario, 'udo_fkdocumento' => $model->udo_fkdocumento], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'udo_fkusuario' => $model->udo_fkusuario, 'udo_fkdocumento' => $model->udo_fkdocumento], [
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
            'udo_fkusuario',
            'udo_fkdocumento',
            'udo_fecha',
            'udo_estado',
        ],
    ]) ?>

</div>
