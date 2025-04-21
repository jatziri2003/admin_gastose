<?php

namespace app\controllers;

use app\models\Tmovimiento;
use app\models\TmovimientoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TmovimientoController implements the CRUD actions for Tmovimiento model.
 */
class TmovimientoController extends Controller
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
     * Lists all Tmovimiento models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TmovimientoSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Tmovimiento model.
     * @param int $tmov_id Tmov ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($tmov_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($tmov_id),
        ]);
    }

    /**
     * Creates a new Tmovimiento model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Tmovimiento();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'tmov_id' => $model->tmov_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Tmovimiento model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $tmov_id Tmov ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($tmov_id)
    {
        $model = $this->findModel($tmov_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'tmov_id' => $model->tmov_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Tmovimiento model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $tmov_id Tmov ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($tmov_id)
    {
        $this->findModel($tmov_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Tmovimiento model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $tmov_id Tmov ID
     * @return Tmovimiento the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($tmov_id)
    {
        if (($model = Tmovimiento::findOne(['tmov_id' => $tmov_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
