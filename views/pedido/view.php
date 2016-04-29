<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Pedido */

$this->title = $model->idPedido;
$this->params['breadcrumbs'][] = ['label' => 'Pedidos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pedido-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idPedido' => $model->idPedido, 'email' => $model->email, 'idCarrito' => $model->idCarrito, 'idDireccion' => $model->idDireccion, 'idFormapago' => $model->idFormapago, 'idSucursal' => $model->idSucursal], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idPedido' => $model->idPedido, 'email' => $model->email, 'idCarrito' => $model->idCarrito, 'idDireccion' => $model->idDireccion, 'idFormapago' => $model->idFormapago, 'idSucursal' => $model->idSucursal], [
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
            'idPedido',
            'email:email',
            'idCarrito',
            'fecha',
            'idDireccion',
            'costoEnvio',
            'idFormapago',
            'idSucursal',
        ],
    ]) ?>

</div>
