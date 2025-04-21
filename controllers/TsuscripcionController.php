<?php

namespace app\controllers;

use app\models\Tsuscripcion;
use app\models\TsuscripcionSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TsuscripcionController implements the CRUD actions for Tsuscripcion model.
 */
class TsuscripcionController extends Controller
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
     * Lists all Tsuscripcion models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TsuscripcionSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Tsuscripcion model.
     * @param int $tsus_id Tsus ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($tsus_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($tsus_id),
        ]);
    }

    /**
     * Creates a new Tsuscripcion model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Tsuscripcion();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'tsus_id' => $model->tsus_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Tsuscripcion model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $tsus_id Tsus ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($tsus_id)
    {
        $model = $this->findModel($tsus_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'tsus_id' => $model->tsus_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Tsuscripcion model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $tsus_id Tsus ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($tsus_id)
    {
        $this->findModel($tsus_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Tsuscripcion model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $tsus_id Tsus ID
     * @return Tsuscripcion the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($tsus_id)
    {
        if (($model = Tsuscripcion::findOne(['tsus_id' => $tsus_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
