<?php

namespace app\controllers;

use app\models\Colonia;
use app\models\ColoniaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ColoniaController implements the CRUD actions for Colonia model.
 */
class ColoniaController extends Controller
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
     * Lists all Colonia models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ColoniaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Colonia model.
     * @param int $col_id Col ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($col_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($col_id),
        ]);
    }

    /**
     * Creates a new Colonia model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Colonia();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'col_id' => $model->col_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Colonia model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $col_id Col ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($col_id)
    {
        $model = $this->findModel($col_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'col_id' => $model->col_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Colonia model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $col_id Col ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($col_id)
    {
        $this->findModel($col_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Colonia model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $col_id Col ID
     * @return Colonia the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($col_id)
    {
        if (($model = Colonia::findOne(['col_id' => $col_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
