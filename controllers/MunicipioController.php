<?php

namespace app\controllers;

use app\models\Municipio;
use app\models\MunicipioSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MunicipioController implements the CRUD actions for Municipio model.
 */
class MunicipioController extends Controller
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
     * Lists all Municipio models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new MunicipioSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Municipio model.
     * @param int $mun_id Mun ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($mun_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($mun_id),
        ]);
    }

    /**
     * Creates a new Municipio model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Municipio();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'mun_id' => $model->mun_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Municipio model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $mun_id Mun ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($mun_id)
    {
        $model = $this->findModel($mun_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'mun_id' => $model->mun_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Municipio model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $mun_id Mun ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($mun_id)
    {
        $this->findModel($mun_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Municipio model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $mun_id Mun ID
     * @return Municipio the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($mun_id)
    {
        if (($model = Municipio::findOne(['mun_id' => $mun_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
