<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Покупки';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="purchases-index">

	<h1><?= Html::encode($this->title) ?></h1>

	<p>
		<?= Html::a('Добавить покупку', ['create'], ['class' => 'btn btn-success']) ?>
	</p>

	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'columns' => [
			['class' => 'yii\grid\SerialColumn'],

			//'id',
			'product',
			'quantity',
			'price',
			'sum',
			'descr:ntext',
			// 'id_user',

			['class' => 'yii\grid\ActionColumn'],
		],
	]); ?>

</div>
