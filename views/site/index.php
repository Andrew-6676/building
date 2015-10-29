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
<div class="site-index">

	<div class="jumbotron">
		<h1>Congratulations!</h1>

		<p class="lead">You have successfully created your Yii-powered application.</p>

		<p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
	</div>

	<div class="body-content">

		<div class="row">
			<div class="col-lg-4">
				<h2>Heading</h2>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
					et
					dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
					aliquip
					ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
					dolore eu
					fugiat nulla pariatur.</p>

				<p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
			</div>
			<div class="col-lg-4">
				<h2>Heading</h2>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
					et
					dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
					aliquip
					ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
					dolore eu
					fugiat nulla pariatur.</p>

				<p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
			</div>
			<div class="col-lg-4">
				<h2>Heading</h2>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
					et
					dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
					aliquip
					ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
					dolore eu
					fugiat nulla pariatur.</p>

				<p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a>
				</p>
			</div>
		</div>

	</div>
</div>

<div class="content">

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