<?php

namespace app\controllers;

use Yii;
use app\models\Direccion;
use app\models\DireccionSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DireccionController implements the CRUD actions for Direccion model.
 */
class DireccionController extends Controller
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
     * Lists all Direccion models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DireccionSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Direccion model.
     * @param integer $idDireccion
     * @param string $email
     * @return mixed
     */
    public function actionView($idDireccion, $email)
    {
        return $this->render('view', [
            'model' => $this->findModel($idDireccion, $email),
        ]);
    }

    /**
     * Creates a new Direccion model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Direccion();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idDireccion' => $model->idDireccion, 'email' => $model->email]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Direccion model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $idDireccion
     * @param string $email
     * @return mixed
     */
    public function actionUpdate($idDireccion, $email)
    {
        $model = $this->findModel($idDireccion, $email);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idDireccion' => $model->idDireccion, 'email' => $model->email]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Direccion model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $idDireccion
     * @param string $email
     * @return mixed
     */
    public function actionDelete($idDireccion, $email)
    {
        $this->findModel($idDireccion, $email)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Direccion model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $idDireccion
     * @param string $email
     * @return Direccion the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idDireccion, $email)
    {
        if (($model = Direccion::findOne(['idDireccion' => $idDireccion, 'email' => $email])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
