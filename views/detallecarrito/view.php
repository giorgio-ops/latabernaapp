<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Detallecarrito */

$this->title = $model->codProducto;
$this->params['breadcrumbs'][] = ['label' => 'Detallecarritos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detallecarrito-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'codProducto' => $model->codProducto, 'idCarrito' => $model->idCarrito], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'codProducto' => $model->codProducto, 'idCarrito' => $model->idCarrito], [
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
            'codProducto',
            'precio',
            'cantidad',
            'subtotal',
            'idCarrito',
        ],
    ]) ?>

</div>
