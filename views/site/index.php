<?php
//	namespace app\controllers;
//	use Yii;
	use app\models\Users;
	use app\assets\SiteAsset;

SiteAsset::register($this);

//$this->registerJsFile('/fingers_server/js/views/websocket.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
//$this->registerCssFile('/finger_cod/css/site.css');

/* @var $this yii\web\View */
$this->title = 'My Yii Application';
?>
<div class="view">



<?php
$tmp = Users::find()->all();
//	->where(['trim(Priz_uvol)' => ''])
//	->andwhere(['LIKE', 'Family', $fio])
//	->all();
//} else {
//$bd_men = Tsostav::find()->where(array(
//		'Cod_sostav' => $cod,
//		'trim(Priz_uvol)' => '')
//)->all();
Yii::$app->utils->print_r($tmp);
?>



</div>