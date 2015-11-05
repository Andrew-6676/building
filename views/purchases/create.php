<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Purchases */

$this->title = 'Добавить покупку';
$this->params['breadcrumbs'][] = ['label' => 'Покупки', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="purchases-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
