<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Users;
use app\models\Categories;
use yii\jui\DatePicker;
use mihaildev\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model app\models\Blog */
/* @var $form yii\widgets\ActiveForm */



?>

<div class="blog-form">

	<?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model,'b_date')->widget(
		DatePicker::className(),
		['clientOptions' => [
			'defaultDate' => date('y-m-d'),
			'dateFormat' => 'd M, Y',
			'buttonImage' => "/images/calendar.gif",
			'showOn' => "button",
			'showButtonPanel' => 'true',
			'changeMonth' => 'true',
            'changeYear' => 'true',

		]]) ?>

	<?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'b_text')->widget(CKEditor::className(),[
			'editorOptions' => [
				'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
				'inline' => false, //по умолчанию false
			],
		]);
	?>

	<?= $form->field($model, 'id_category')->dropDownList(ArrayHelper::map(Categories::find()->all(), 'id', 'name', 'parent.name')) ?>

	<?= $form->field($model, 'tags')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'published')->checkbox() ?>

	<div class="form-group">
		<?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>


<?php

//$arr = ArrayHelper::map(Categories::find()->all(), 'id', 'name', 'parent.name');
//\app\components\Utils::print_r($arr);