<?php

namespace app\controllers;

use app\models\Carrera;
use kartik\mpdf\Pdf;
use yii\web\Controller;
use app\models\Movimiento;
use yii\filters\VerbFilter;
use app\models\MovimientoSearch;
use app\models\Servicio;
use app\models\Suscripcion;
use yii\web\NotFoundHttpException;

/**
 * MovimientoController implements the CRUD actions for Movimiento model.
 */
class MovimientoController extends Controller
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
     * Lists all Movimiento models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new MovimientoSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Movimiento model.
     * @param int $mov_id Mov ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($mov_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($mov_id),
        ]);
    }

    /**
     * Creates a new Movimiento model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Movimiento();
        $servicio =new Servicio();
        $suscripcion= new Suscripcion();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'mov_id' => $model->mov_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
            'servicio' => $servicio,
            'suscripcion'=> $suscripcion
        ]);
    }

    /**
     * Updates an existing Movimiento model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $mov_id Mov ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($mov_id)
    {
        $model = $this->findModel($mov_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'mov_id' => $model->mov_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Movimiento model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $mov_id Mov ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($mov_id)
    {
        $this->findModel($mov_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Movimiento model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $mov_id Mov ID
     * @return Movimiento the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($mov_id)
    {
        if (($model = Movimiento::findOne(['mov_id' => $mov_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
   
 
public function actionReporte() {
    $carreras = Carrera::find()->all();
    // get your HTML raw content without any layouts or scripts
    $content = $this->renderPartial('reporte', compact('carreras'));
    
    // setup kartik\mpdf\Pdf component
    $pdf = new Pdf([
        // set to use core fonts only
        'mode' => Pdf::MODE_CORE, 
        // A4 paper format
        'format' => Pdf::FORMAT_A4, 
        // portrait orientation
        'orientation' => Pdf::ORIENT_PORTRAIT, 
        // stream to browser inline
        'destination' => Pdf::DEST_BROWSER, 
        // your html content input
        'content' => $content,  
        // format content from your own css file if needed or use the
        // enhanced bootstrap css built by Krajee for mPDF formatting 
        'cssFile' => '@vendor/kartik-v/yii2-mpdf/src/assets/kv-mpdf-bootstrap.min.css',
        // any css to be embedded if required
        'cssInline' => '.kv-heading-1{font-size:18px} .rojo{color:red}', 
         // set mPDF properties on the fly
        'options' => ['title' => 'Krajee Report Title'],
         // call mPDF methods on the fly
        'methods' => [ 
            'SetHeader'=>['Reporte carrera'], 
            'SetFooter'=>['{PAGENO}'],
        ]
    ]);
    
    // return the pdf output as per the destination setting
    return $pdf->render(); 
}	
}
