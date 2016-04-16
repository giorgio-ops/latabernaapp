<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DireccionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Direccions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="direccion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Direccion', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idDireccion',
            'alias',
            'descripcion',
            'latitud',
            'longitud',
            // 'ciudad',
            // 'telefono',
            // 'email:email',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
