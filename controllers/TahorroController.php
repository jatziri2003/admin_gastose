<?php

namespace app\controllers;

use app\models\Tahorro;
use app\models\TahorroSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TahorroController implements the CRUD actions for Tahorro model.
 */
class TahorroController extends Controller
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
     * Lists all Tahorro models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TahorroSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Tahorro model.
     * @param int $taho_id Taho ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($taho_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($taho_id),
        ]);
    }

    /**
     * Creates a new Tahorro model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Tahorro();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'taho_id' => $model->taho_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Tahorro model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $taho_id Taho ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($taho_id)
    {
        $model = $this->findModel($taho_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'taho_id' => $model->taho_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Tahorro model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $taho_id Taho ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($taho_id)
    {
        $this->findModel($taho_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Tahorro model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $taho_id Taho ID
     * @return Tahorro the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($taho_id)
    {
        if (($model = Tahorro::findOne(['taho_id' => $taho_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
