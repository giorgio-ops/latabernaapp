<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SucursalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sucursals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sucursal-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Sucursal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idSucursal',
            'codigo',
            'ciudad',
            'lugar',
            'direccion',
            // 'latitud',
            // 'longitud',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
