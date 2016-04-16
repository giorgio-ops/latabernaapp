<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Direccion */

$this->title = $model->idDireccion;
$this->params['breadcrumbs'][] = ['label' => 'Direccions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="direccion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idDireccion' => $model->idDireccion, 'email' => $model->email], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idDireccion' => $model->idDireccion, 'email' => $model->email], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idDireccion',
            'alias',
            'descripcion',
            'latitud',
            'longitud',
            'ciudad',
            'telefono',
            'email:email',
        ],
    ]) ?>

</div>
