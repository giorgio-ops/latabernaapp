<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sucursal */

$this->title = 'Update Sucursal: ' . $model->idSucursal;
$this->params['breadcrumbs'][] = ['label' => 'Sucursals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idSucursal, 'url' => ['view', 'id' => $model->idSucursal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sucursal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
