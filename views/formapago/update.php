<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Formapago */

$this->title = 'Update Formapago: ' . $model->idFormapago;
$this->params['breadcrumbs'][] = ['label' => 'Formapagos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idFormapago, 'url' => ['view', 'id' => $model->idFormapago]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="formapago-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
