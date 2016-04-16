<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PreferenciaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Preferencias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="preferencia-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Preferencia', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'email:email',
            'fecha',
            'seleccionCocktail',
            'seleccionColor',
            'seleccionTransporte',
            // 'seleccionHora',
            // 'seleccionCompania',
            // 'seleccion6',
            // 'latitud',
            // 'longitud',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
