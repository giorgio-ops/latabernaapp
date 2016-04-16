<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Preferencia */

$this->title = 'Create Preferencia';
$this->params['breadcrumbs'][] = ['label' => 'Preferencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="preferencia-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
