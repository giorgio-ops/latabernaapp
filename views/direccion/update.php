<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Direccion */

$this->title = 'Update Direccion: ' . $model->idDireccion;
$this->params['breadcrumbs'][] = ['label' => 'Direccions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idDireccion, 'url' => ['view', 'idDireccion' => $model->idDireccion, 'email' => $model->email]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="direccion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
