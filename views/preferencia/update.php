<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Preferencia */

$this->title = 'Update Preferencia: ' . $model->email;
$this->params['breadcrumbs'][] = ['label' => 'Preferencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->email, 'url' => ['view', 'id' => $model->email]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="preferencia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
