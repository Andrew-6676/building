<?php
/**
 * Created by PhpStorm.
 * User: andrew
 * Date: 02.11.15
 * Time: 12:01
 */

namespace app\controllers\site;

use yii\base\Action;

class IndexAction extends Action
{
	public function run()
	{
		return $this->controller->render('index');
	}
}