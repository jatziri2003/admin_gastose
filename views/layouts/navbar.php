<?php

use webvimark\modules\UserManagement\models\User;
use yii\bootstrap5\Nav;
use yii\bootstrap5\Html;
use yii\bootstrap5\NavBar;
use webvimark\modules\UserManagement\UserManagementModule;
?>
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => ['class' => "navbar navbar-expand-lg navbar-light navbar-float"]
    ]);
    echo Nav::widget([
      'encodeLabels'=> false,
        'options' => ['class' => 'navbar-nav'],
        'items' => [
            ['label' => 'Inicio', 'url' => ['/']],
            ['label' => 'Reporte', 'url' => ['/movimiento/reporte']],
            ['label' => 'Dashboard', 'url' => ['/dashboard']],
            [
              'label' => 'Backend routes',
              'items'=>UserManagementModule::menuItems(), 
              'visible'=> Yii::$app->user->isSuperAdmin
            ],
            Yii::$app->user->isGuest
                ? ['label' => 'Login', 'url' => ['/site/login']]
                : '<li class="nav-item">'
                    . Html::beginForm(['/user-management/auth/logout'])
                    . Html::submitButton(
                        'Logout (' . Yii::$app->user->identity->username . ')',
                        ['class' => 'nav-link btn btn-link logout']
                    )
                    . Html::endForm()
                    . '</li>'
        ]
    ]);
    NavBar::end();
    ?>