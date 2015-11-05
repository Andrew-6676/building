<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use app\components\Utils;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Блог';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blog-index">

	<h1><?= Html::encode($this->title) ?></h1>

	<p>
		<?= Html::a('Добавить запись', ['create'], ['class' => 'btn btn-success']) ?>
	</p>

	<?=
	ListView::widget([
		'dataProvider' => $dataProvider,
		'itemOptions' => ['class' => 'item'],
		'itemView' => function ($model, $key, $index, $widget) {
			$user = '';
			if ($model->user->id != Yii::$app->user->identity->id) {
				$user = ' ('.$model->user->name.')';
			}
			$html = '';
			$html .= Html::a(Html::encode($model->title), ['view', 'id' => $model->id]).$user;
			$html .= $model->b_date;//Utils::format_date($model->b_date);
			$html .= '';
			$html .= '';
			$html .= '<hr>';

			return $html;
		},
	])
	?>

</div>
