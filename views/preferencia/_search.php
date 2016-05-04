<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PreferenciaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="preferencia-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'fecha') ?>

    <?= $form->field($model, 'seleccionPaisaje') ?>

    <?= $form->field($model, 'seleccionCocktail') ?>

    <?= $form->field($model, 'seleccionColor') ?>

    <?php // echo $form->field($model, 'seleccionHora') ?>

    <?php // echo $form->field($model, 'seleccionTransporte') ?>

    <?php // echo $form->field($model, 'seleccionUso') ?>

    <?php // echo $form->field($model, 'latitud') ?>

    <?php // echo $form->field($model, 'longitud') ?>

    <?php // echo $form->field($model, 'estado') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
