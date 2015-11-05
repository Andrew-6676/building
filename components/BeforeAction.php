<?php
/**
 * Created by PhpStorm.
 * User: andrew
 * Date: 05.11.15
 * Time: 9:01
 */

namespace app\components;

use yii;
use yii\base\Behavior;
use yii\web\Controller;

class BeforeAction extends Behavior
{

	public $custom_info = NULL;

	public function events()
	{
		return [
			Controller::EVENT_BEFORE_ACTION => 'writeLog',
			//Можно еще ща что-то зацепиться
		];
	}

	public function writeLog() {
		//$controller = $this->owner;
		//file_put_contents('log.txt', "{$_SERVER['REMOTE_ADDR']}|".time()."|".$controller::className()."|".$this->custom_info."n", FILE_APPEND);
	}
}

