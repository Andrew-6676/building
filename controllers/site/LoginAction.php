<?php
/**
 * Created by PhpStorm.
 * User: andrew
 * Date: 02.11.15
 * Time: 12:01
 */

namespace app\controllers\site;

use Yii;
use yii\base\Action;
use app\models\LoginForm;

class LoginAction extends Action
{
	public function run()
	{
		if (!\Yii::$app->user->isGuest) {
			return $this->controller->goHome();
		}

		$model = new LoginForm();
		if ($model->load(Yii::$app->request->post()) && $model->login()) {
			return $this->controller->goBack();
		}
		return $this->controller->render('login', [
			'model' => $model,
		]);
	}
}
