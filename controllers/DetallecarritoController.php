<?php

namespace app\controllers;

use Yii;
use app\models\Detallecarrito;
use app\models\DetallecarritoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DetallecarritoController implements the CRUD actions for Detallecarrito model.
 */
class DetallecarritoController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Detallecarrito models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DetallecarritoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Detallecarrito model.
     * @param string $codProducto
     * @param integer $idCarrito
     * @return mixed
     */
    public function actionView($codProducto, $idCarrito)
    {
        return $this->render('view', [
            'model' => $this->findModel($codProducto, $idCarrito),
        ]);
    }

    /**
     * Creates a new Detallecarrito model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Detallecarrito();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'codProducto' => $model->codProducto, 'idCarrito' => $model->idCarrito]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Detallecarrito model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $codProducto
     * @param integer $idCarrito
     * @return mixed
     */
    public function actionUpdate($codProducto, $idCarrito)
    {
        $model = $this->findModel($codProducto, $idCarrito);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'codProducto' => $model->codProducto, 'idCarrito' => $model->idCarrito]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Detallecarrito model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $codProducto
     * @param integer $idCarrito
     * @return mixed
     */
    public function actionDelete($codProducto, $idCarrito)
    {
        $this->findModel($codProducto, $idCarrito)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Detallecarrito model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $codProducto
     * @param integer $idCarrito
     * @return Detallecarrito the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($codProducto, $idCarrito)
    {
        if (($model = Detallecarrito::findOne(['codProducto' => $codProducto, 'idCarrito' => $idCarrito])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
