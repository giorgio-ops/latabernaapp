<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Detallecarrito */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detallecarrito-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'codProducto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'precio')->textInput() ?>

    <?= $form->field($model, 'cantidad')->textInput() ?>

    <?= $form->field($model, 'subtotal')->textInput() ?>

    <?= $form->field($model, 'idCarrito')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
