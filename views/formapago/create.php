<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Formapago */

$this->title = 'Create Formapago';
$this->params['breadcrumbs'][] = ['label' => 'Formapagos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="formapago-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
