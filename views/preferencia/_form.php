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

    <?= $form->field($model, 'seleccionPaisaje')->dropDownList([ '0', '1', '2', '3', '4', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'seleccionCocktail')->dropDownList([ '0', '1', '2', '3', '4', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'seleccionColor')->dropDownList([ '0', '1', '2', '3', '4', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'seleccionHora')->dropDownList([ '0', '1', '2', '3', '4', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'seleccionTransporte')->dropDownList([ '0', '1', '2', '3', '4', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'seleccionUso')->dropDownList([ '0', '1', '2', '3', '4', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'latitud')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'longitud')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'estado')->dropDownList([ 'incompleto' => 'Incompleto', 'completo' => 'Completo', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
