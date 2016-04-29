<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SucursalSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sucursal-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idSucursal') ?>

    <?= $form->field($model, 'codigo') ?>

    <?= $form->field($model, 'ciudad') ?>

    <?= $form->field($model, 'lugar') ?>

    <?= $form->field($model, 'direccion') ?>

    <?php // echo $form->field($model, 'latitud') ?>

    <?php // echo $form->field($model, 'longitud') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
