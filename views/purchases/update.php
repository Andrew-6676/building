<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Purchases */

$this->title = 'Редактирование: ' . ' ' . $model->product;
$this->params['breadcrumbs'][] = ['label' => 'Покупки', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->product, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="purchases-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
