<?php

namespace app\controllers;

use Yii;
use app\models\Pedido;
use app\models\PedidoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PedidoController implements the CRUD actions for Pedido model.
 */
class PedidoController extends Controller
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
     * Lists all Pedido models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PedidoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Pedido model.
     * @param integer $idPedido
     * @param string $email
     * @param integer $idCarrito
     * @param integer $idDireccion
     * @param integer $idFormapago
     * @param integer $idSucursal
     * @return mixed
     */
    public function actionView($idPedido, $email, $idCarrito, $idDireccion, $idFormapago, $idSucursal)
    {
        return $this->render('view', [
            'model' => $this->findModel($idPedido, $email, $idCarrito, $idDireccion, $idFormapago, $idSucursal),
        ]);
    }

    /**
     * Creates a new Pedido model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Pedido();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idPedido' => $model->idPedido, 'email' => $model->email, 'idCarrito' => $model->idCarrito, 'idDireccion' => $model->idDireccion, 'idFormapago' => $model->idFormapago, 'idSucursal' => $model->idSucursal]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Pedido model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $idPedido
     * @param string $email
     * @param integer $idCarrito
     * @param integer $idDireccion
     * @param integer $idFormapago
     * @param integer $idSucursal
     * @return mixed
     */
    public function actionUpdate($idPedido, $email, $idCarrito, $idDireccion, $idFormapago, $idSucursal)
    {
        $model = $this->findModel($idPedido, $email, $idCarrito, $idDireccion, $idFormapago, $idSucursal);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idPedido' => $model->idPedido, 'email' => $model->email, 'idCarrito' => $model->idCarrito, 'idDireccion' => $model->idDireccion, 'idFormapago' => $model->idFormapago, 'idSucursal' => $model->idSucursal]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Pedido model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $idPedido
     * @param string $email
     * @param integer $idCarrito
     * @param integer $idDireccion
     * @param integer $idFormapago
     * @param integer $idSucursal
     * @return mixed
     */
    public function actionDelete($idPedido, $email, $idCarrito, $idDireccion, $idFormapago, $idSucursal)
    {
        $this->findModel($idPedido, $email, $idCarrito, $idDireccion, $idFormapago, $idSucursal)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Pedido model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $idPedido
     * @param string $email
     * @param integer $idCarrito
     * @param integer $idDireccion
     * @param integer $idFormapago
     * @param integer $idSucursal
     * @return Pedido the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idPedido, $email, $idCarrito, $idDireccion, $idFormapago, $idSucursal)
    {
        if (($model = Pedido::findOne(['idPedido' => $idPedido, 'email' => $email, 'idCarrito' => $idCarrito, 'idDireccion' => $idDireccion, 'idFormapago' => $idFormapago, 'idSucursal' => $idSucursal])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
