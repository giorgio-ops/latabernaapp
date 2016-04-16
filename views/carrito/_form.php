<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Carrito */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="carrito-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idCarrito')->textInput() ?>

    <?= $form->field($model, 'total')->textInput() ?>

    <?= $form->field($model, 'estado')->dropDownList([ 'abierto' => 'Abierto', 'comprado' => 'Comprado', 'descartado' => 'Descartado', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
