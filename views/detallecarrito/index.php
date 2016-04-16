<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DetallecarritoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Detallecarritos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detallecarrito-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Detallecarrito', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'codProducto',
            'precio',
            'cantidad',
            'subtotal',
            'idCarrito',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
