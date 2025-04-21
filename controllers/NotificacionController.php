<?php

namespace app\controllers;

use app\models\Notificacion;
use app\models\NotificacionSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * NotificacionController implements the CRUD actions for Notificacion model.
 */
class NotificacionController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
	return [
		'ghost-access'=> [
			'class' => 'webvimark\modules\UserManagement\components\GhostAccessControl',
		],
	];
    }

    /**
     * Lists all Notificacion models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new NotificacionSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Notificacion model.
     * @param int $not_id Not ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($not_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($not_id),
        ]);
    }

    /**
     * Creates a new Notificacion model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Notificacion();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'not_id' => $model->not_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Notificacion model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $not_id Not ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($not_id)
    {
        $model = $this->findModel($not_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'not_id' => $model->not_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Notificacion model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $not_id Not ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($not_id)
    {
        $this->findModel($not_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Notificacion model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $not_id Not ID
     * @return Notificacion the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($not_id)
    {
        if (($model = Notificacion::findOne(['not_id' => $not_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
