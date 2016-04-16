<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Formapago */

$this->title = $model->idFormapago;
$this->params['breadcrumbs'][] = ['label' => 'Formapagos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="formapago-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idFormapago], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idFormapago], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idFormapago',
            'descripcion',
        ],
    ]) ?>

</div>
