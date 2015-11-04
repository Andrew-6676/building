<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;

class SiteController extends Controller
{
	public function behaviors()
	{
		return [
			'access' => [
				'class' => AccessControl::className(),
				'only' => ['logout'],
				'rules' => [
					[
						'actions' => ['logout'],
						'allow' => true,
						'roles' => ['@'],
					],
				],
			],
			'verbs' => [
				'class' => VerbFilter::className(),
				'actions' => [
					'logout' => ['post'],
				],
			],
		];
	}

	public function actions()
	{
		return [
			'index' => ['class' => 'app\controllers\site\IndexAction'],
			'login' => ['class' => 'app\controllers\site\LoginAction'],
			'setup' => ['class' => 'app\controllers\site\SetupAction'],
			'error' => [
				'class' => 'yii\web\ErrorAction',
			],
			'captcha' => [
				'class' => 'yii\captcha\CaptchaAction',
				'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
			],
		];
	}


	/*-------------------------------------------------------------------------------*/
	public function actionLogout()
	{
		Yii::$app->user->logout();
		return $this->goHome();
	}

	/*-------------------------------------------------------------------------------*/
//	public function actionContact()
//	{
//		$model = new ContactForm();
//		if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
//			Yii::$app->session->setFlash('contactFormSubmitted');
//
//			return $this->refresh();
//		}
//		return $this->render('contact', [
//			'model' => $model,
//		]);
//	}

	/*-------------------------------------------------------------------------------*/
	public function actionAbout()
	{
		return $this->render('about');
	}
}
