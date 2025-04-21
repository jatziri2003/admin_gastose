<?php

namespace app\controllers;

use app\models\Tiempo;
use app\models\TiempoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TiempoController implements the CRUD actions for Tiempo model.
 */
class TiempoController extends Controller
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
     * Lists all Tiempo models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TiempoSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Tiempo model.
     * @param int $tim_id Tim ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($tim_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($tim_id),
        ]);
    }

    /**
     * Creates a new Tiempo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Tiempo();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'tim_id' => $model->tim_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Tiempo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $tim_id Tim ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($tim_id)
    {
        $model = $this->findModel($tim_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'tim_id' => $model->tim_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Tiempo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $tim_id Tim ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($tim_id)
    {
        $this->findModel($tim_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Tiempo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $tim_id Tim ID
     * @return Tiempo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($tim_id)
    {
        if (($model = Tiempo::findOne(['tim_id' => $tim_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
