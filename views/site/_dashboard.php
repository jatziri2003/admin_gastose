
<?php
use yii\helpers\Html;
$borde = $model->das_estatus == 1 ? '2px solid lightgray' : '4px dashed red';
?>
<div class="btn btn-default" style="border: <?= $borde ?>; width: 60%;">
<?= Html::a($model->img, [$model->das_url]) ?>
<h4><?= $model->das_titulo ?></h4>
</div>
<br><br>