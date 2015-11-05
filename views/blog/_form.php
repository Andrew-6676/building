<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
//use app\models\Users;
use app\models\Categories;
use yii\jui\DatePicker;
//use dosamigos\ckeditor\CKEditor;
use iutbay\yii2kcfinder\KCFinder;
use app\widgets\CKEditor;
//use dosamigos\ckeditor\CKEditorInline;

/* @var $this yii\web\View */
/* @var $model app\models\Blog */
/* @var $form yii\widgets\ActiveForm */



// kcfinder options
// http://kcfinder.sunhater.com/install#dynamic
$kcfOptions = array_merge(KCFinder::$kcfDefaultOptions, [
	'uploadURL' => Yii::getAlias('@web').'/upload',
	'access' => [
		'files' => [
			'upload' => true,
			'delete' => false,
			'copy' => false,
			'move' => false,
			'rename' => false,
		],
		'dirs' => [
			'create' => true,
			'delete' => false,
			'rename' => false,
		],
	],
]);

// Set kcfinder session options
Yii::$app->session->set('KCFINDER', $kcfOptions);


?>

<div class="blog-form">

	<?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model,'b_date')->widget(
		DatePicker::className(),
		['clientOptions' => [
			//'defaultDate' => date('yy-mm-dd'),
			'dateFormat' => 'mm/dd/yy',
			'buttonImage' => "/images/calendar.gif",
			'showOn' => "button",
			'showButtonPanel' => 'true',
			//'changeMonth' => 'true',
            //'changeYear' => 'true',

		]]) ?>

	<?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'id_category')->dropDownList(ArrayHelper::map(Categories::find()->all(), 'id', 'name', 'parent.name')) ?>

	<?= $form->field($model, 'b_text')->widget(CKEditor::className(), [
		'options' => ['rows' => 16],
		'preset' => 'full'
	]) ?>

	<?= $form->field($model, 'tags')->textInput(['maxlength' => true]) ?>
	<?php
		//$model->published = true;
		//$model->personal = true;
	?>
	<fieldset class="">
		<legend>Настройки</legend>
		<?= $form->field($model, 'personal')->checkbox() ?>
		<?= $form->field($model, 'published')->checkbox() ?>
	</fieldset>

	<div class="form-group">
		<?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	</div>


	<?php ActiveForm::end(); ?>

</div>

<?php //CKEditorInline::begin(['preset' => 'basic']);?>
<!--	This text can be edited now :)-->
<?php //CKEditorInline::end();?>

<?php

//$arr = ArrayHelper::map(Categories::find()->all(), 'id', 'name', 'parent.name');
//\app\components\Utils::print_r($arr);