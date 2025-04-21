<?php

namespace app\controllers;

use app\models\Suscripcion;
use app\models\SuscripcionSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SuscripcionController implements the CRUD actions for Suscripcion model.
 */
class SuscripcionController extends Controller
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
     * Lists all Suscripcion models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SuscripcionSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Suscripcion model.
     * @param int $sus_id Sus ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($sus_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($sus_id),
        ]);
    }

    /**
     * Creates a new Suscripcion model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Suscripcion();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'sus_id' => $model->sus_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Suscripcion model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $sus_id Sus ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($sus_id)
    {
        $model = $this->findModel($sus_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'sus_id' => $model->sus_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Suscripcion model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $sus_id Sus ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($sus_id)
    {
        $this->findModel($sus_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Suscripcion model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $sus_id Sus ID
     * @return Suscripcion the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($sus_id)
    {
        if (($model = Suscripcion::findOne(['sus_id' => $sus_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
