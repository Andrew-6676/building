<?php
/**
 * Created by PhpStorm.
 * User: andrew
 * Date: 02.11.15
 * Time: 16:44
 */

namespace app\controllers\site;

use yii\base\Action;

class SetupAction extends Action
{
	public function run()
	{
		return $this->controller->render('setup');
	}
}