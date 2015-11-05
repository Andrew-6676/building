<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Categories;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Purchases */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="purchases-form">

	<?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model, 'id_category')->dropDownList(ArrayHelper::map(Categories::find()->all(), 'id', 'name', 'parent.name')) ?>

	<?= $form->field($model, 'product')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'quantity')->textInput() ?>

	<?= $form->field($model, 'price')->textInput() ?>

	<?= $form->field($model, 'descr')->textarea(['rows' => 6]) ?>

	<div class="form-group">
		<?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Сохранить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>
