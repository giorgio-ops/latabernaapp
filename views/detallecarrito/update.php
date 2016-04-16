<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Detallecarrito */

$this->title = 'Update Detallecarrito: ' . $model->codProducto;
$this->params['breadcrumbs'][] = ['label' => 'Detallecarritos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->codProducto, 'url' => ['view', 'codProducto' => $model->codProducto, 'idCarrito' => $model->idCarrito]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detallecarrito-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
