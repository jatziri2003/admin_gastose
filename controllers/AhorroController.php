<?php

namespace app\controllers;

use app\models\Ahorro;
use app\models\AhorroSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AhorroController implements the CRUD actions for Ahorro model.
 */
class AhorroController extends Controller
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
     * Lists all Ahorro models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new AhorroSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Ahorro model.
     * @param int $aho_id Aho ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($aho_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($aho_id),
        ]);
    }

    /**
     * Creates a new Ahorro model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Ahorro();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'aho_id' => $model->aho_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Ahorro model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $aho_id Aho ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($aho_id)
    {
        $model = $this->findModel($aho_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'aho_id' => $model->aho_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Ahorro model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $aho_id Aho ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($aho_id)
    {
        $this->findModel($aho_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Ahorro model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $aho_id Aho ID
     * @return Ahorro the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($aho_id)
    {
        if (($model = Ahorro::findOne(['aho_id' => $aho_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
