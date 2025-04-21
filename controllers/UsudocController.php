<?php

namespace app\controllers;

use app\models\Usudoc;
use app\models\UsudocSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UsudocController implements the CRUD actions for Usudoc model.
 */
class UsudocController extends Controller
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
     * Lists all Usudoc models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new UsudocSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Usudoc model.
     * @param int $udo_fkusuario Udo Fkusuario
     * @param int $udo_fkdocumento Udo Fkdocumento
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($udo_fkusuario, $udo_fkdocumento)
    {
        return $this->render('view', [
            'model' => $this->findModel($udo_fkusuario, $udo_fkdocumento),
        ]);
    }

    /**
     * Creates a new Usudoc model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Usudoc();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'udo_fkusuario' => $model->udo_fkusuario, 'udo_fkdocumento' => $model->udo_fkdocumento]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Usudoc model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $udo_fkusuario Udo Fkusuario
     * @param int $udo_fkdocumento Udo Fkdocumento
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($udo_fkusuario, $udo_fkdocumento)
    {
        $model = $this->findModel($udo_fkusuario, $udo_fkdocumento);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'udo_fkusuario' => $model->udo_fkusuario, 'udo_fkdocumento' => $model->udo_fkdocumento]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Usudoc model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $udo_fkusuario Udo Fkusuario
     * @param int $udo_fkdocumento Udo Fkdocumento
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($udo_fkusuario, $udo_fkdocumento)
    {
        $this->findModel($udo_fkusuario, $udo_fkdocumento)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Usudoc model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $udo_fkusuario Udo Fkusuario
     * @param int $udo_fkdocumento Udo Fkdocumento
     * @return Usudoc the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($udo_fkusuario, $udo_fkdocumento)
    {
        if (($model = Usudoc::findOne(['udo_fkusuario' => $udo_fkusuario, 'udo_fkdocumento' => $udo_fkdocumento])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
