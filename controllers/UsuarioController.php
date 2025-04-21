<?php

namespace app\controllers;

use Yii;
use app\models\Usuario;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\UsuarioSearch;
use yii\web\NotFoundHttpException;
use yii\web\ForbiddenHttpException;
use yii\web\BadRequestHttpException;
use webvimark\modules\UserManagement\models\User;

/**
 * UsuarioController implements the CRUD actions for Usuario model.
 */
class UsuarioController extends Controller
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
     * Lists all Usuario models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new UsuarioSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Usuario model.
     * @param int $usu_id Usu ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($usu_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($usu_id),
        ]);
    }

    /**
     * Creates a new Usuario model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Usuario();
        $user = new User();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $user->load($this->request->post()) ) {
                $user->status = 1;
                $user->superadmin = 1;
                if ($user->save(false)){
                    $model->usu_fkuser= $user->id;
                    if ($model->save()){
                         return $this->redirect(['view', 'usu_id' => $model->usu_id]);
                    }
                }             
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,'user' => $user
        ]);
    }

    /**
     * Updates an existing Usuario model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $usu_id Usu ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($usu_id = null)
{
    $user=User::find()->where(['id'=>Yii::$app->user->identity->id])->one();

    if ($usu_id === null && isset($user)) {
        $usuario = Usuario::find()->where(['usu_fkuser' =>$user->id])->one();
        // var_dump($usuario);
        // die;
        if ($usuario) {
            $usu_id = $usuario->usu_id;
        } else {
            throw new NotFoundHttpException('Perfil no encontrado');
        }
    }

    if ($usu_id === null) {
        throw new BadRequestHttpException('Parámetro usu_id requerido');
    }

    $model = $this->findModel($usu_id);

    // Verificar permisos - cliente solo puede editar su propio perfil
    if ( $model->usu_fkuser != Yii::$app->user->id) {
        throw new ForbiddenHttpException('No tienes permiso para editar este perfil');
    }

    
    if ($model->load($this->request->post()) && $user->load($this->request->post()) ) {
        $user->save(false);
            if ($model->save()){
                Yii::$app->session->setFlash('success', 'Perfil actualizado correctamente');
                 return $this->redirect(['update']);
            }
    }

    return $this->render('update', [
        'model' => $model,
        'user'=> $user,
    ]);
}
    /**
     * Deletes an existing Usuario model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $usu_id Usu ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($usu_id)
    {
        $this->findModel($usu_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Usuario model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $usu_id Usu ID
     * @return Usuario the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($usu_id)
    {
        if (($model = Usuario::findOne(['usu_id' => $usu_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
