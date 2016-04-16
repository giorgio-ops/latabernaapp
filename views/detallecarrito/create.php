<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Detallecarrito */

$this->title = 'Create Detallecarrito';
$this->params['breadcrumbs'][] = ['label' => 'Detallecarritos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detallecarrito-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
