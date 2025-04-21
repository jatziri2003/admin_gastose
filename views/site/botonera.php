<div class="site-index">
    <div class="body-content">
      <div class="jumbotron text-center">
        <h1 class="display-4"><?= Yii::t('app', 'Bienvenid@s') ?></h1>
      </div>
      <br><br>
      <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'options' => [
          'class' => 'row row-cols-lg-4 row-cols-md-4 row-cols-sm-3'
        ],
        'layout' => '{items}',
        'summary' => false,
        'itemView' => '_dashboard',
      ]) ?>
    </div>
  </div>