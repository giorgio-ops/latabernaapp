<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Preferencia */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="preferencia-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha')->textInput() ?>

    <?= $form->field($model, 'seleccionCocktail')->dropDownList([ 1 => '1', 2 => '2', 3 => '3', 4 => '4', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'seleccionColor')->dropDownList([ 1 => '1', 2 => '2', 3 => '3', 4 => '4', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'seleccionTransporte')->dropDownList([ 1 => '1', 2 => '2', 3 => '3', 4 => '4', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'seleccionHora')->dropDownList([ 1 => '1', 2 => '2', 3 => '3', 4 => '4', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'seleccionCompania')->dropDownList([ 1 => '1', 2 => '2', 3 => '3', 4 => '4', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'seleccion6')->dropDownList([ 1 => '1', 2 => '2', 3 => '3', 4 => '4', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'latitud')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'longitud')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
