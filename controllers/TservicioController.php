<?php

namespace app\controllers;

use app\models\Tservicio;
use app\models\TservicioSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TservicioController implements the CRUD actions for Tservicio model.
 */
class TservicioController extends Controller
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
     * Lists all Tservicio models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TservicioSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Tservicio model.
     * @param int $tser_id Tser ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($tser_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($tser_id),
        ]);
    }

    /**
     * Creates a new Tservicio model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Tservicio();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'tser_id' => $model->tser_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Tservicio model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $tser_id Tser ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($tser_id)
    {
        $model = $this->findModel($tser_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'tser_id' => $model->tser_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Tservicio model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $tser_id Tser ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($tser_id)
    {
        $this->findModel($tser_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Tservicio model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $tser_id Tser ID
     * @return Tservicio the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($tser_id)
    {
        if (($model = Tservicio::findOne(['tser_id' => $tser_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
