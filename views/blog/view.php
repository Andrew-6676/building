<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use himiklab\colorbox\Colorbox;

/* @var $this yii\web\View */
/* @var $model app\models\Blog */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Блог', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->category->name, 'url' => ['category/'.$model->id_category]];
$this->params['breadcrumbs'][] = $this->title;


?>
<div class="blog-view">

	<?= Colorbox::widget([
		'targets' => [
			'.colorbox' => [
				'maxWidth' => 1000,
				'maxHeight' => 1000,
			],
		],
		'coreStyle' => 1
	]) ?>

	<h1><?= Html::encode($this->title) ?></h1>



	<?php /*echo DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'b_date',
            'title',
            'b_text:ntext',
            'id_category',
            'published:boolean',
            'id_user',
        ],
    ])  */?>

	<?= $model->b_text  ?>
	<?= $model->b_date  ?>

	<p>
		<?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
		<?= Html::a('Удалить', ['delete', 'id' => $model->id], [
			'class' => 'btn btn-danger',
			'data' => [
				'confirm' => 'Вы уверене что хотите удалить этот материал?',
				'method' => 'post',
			],
		]) ?>
	</p>

</div>
