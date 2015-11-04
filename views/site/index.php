<?php
//	namespace app\controllers;
//	use Yii;
	use app\models\Users;
	use app\assets\SiteAsset;
	use yii\bootstrap\Tabs;
//SiteAsset::register($this);

//$this->registerJsFile('/fingers_server/js/views/websocket.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
//$this->registerCssFile('/finger_cod/css/site.css');

/* @var $this yii\web\View */
$this->title = 'My Yii Application';
?>
<div class="view">

Главная страница

</div>


<?php

echo Tabs::widget([
	'items' => [
		[
			'label' => 'Yii2',
			'content' => '<h2>Фреймворк Yii 2 - один из самых быстрых, безопасных и "крутых" php-фреймворков.</h2>',
			'active' => true
		],
		[
			'label' => 'jQuery',
			'content' => '<h2>jQuery - один из самых популярных JavaScript фреймворков, который работает с объектами DOM.</h2>'
		],
		[
			'label' => 'Bootstrap',
			'content' => '<h2>Twitter Bootstrap - супер фреймворк, объединяющий в себе html, css, и JavaScript для для верстки веб-интерфейсов и страниц.</h2>',
			'headerOptions' => [
				'id' => 'headerOptions'
			],
			'options' => [
				'id' => 'options'
			]
		],
		[
			'label' => 'Еще табы',
			'content' => '<h2>Вы можете добавить любое количество табов. Просто опишите их структуру в массиве.</h2>'
		],
		[
			'label' => 'Выпадающий список табов',
			'items' => [
				[
					'label' => 'Первый таб из выпадающего списка',
					'content' => '<h2>Обновите свои познания в Yii 2 and Twitter Bootstrap. Все возможнсти уже обернуты в удобные интерфейсы.</h2>'
				],
				[
					'label' => 'Второй таб из выпадающего списка',
					'content' => '<h2>Один в поле не воин, а двое - уже компания.</h2>'
				],
				[
					'label' => 'Это третий таб из выпадающего списка',
					'content' => '<h2>Третий не лишний!</h2>'
				]
			]
		]
	]
]);

?>