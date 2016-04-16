<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PedidoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pedido-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idPedido') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'idCarrito') ?>

    <?= $form->field($model, 'fecha') ?>

    <?= $form->field($model, 'idDireccion') ?>

    <?php // echo $form->field($model, 'costoEnvio') ?>

    <?php // echo $form->field($model, 'idFormapago') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
