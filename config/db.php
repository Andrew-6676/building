<?php

return [
	'class' => 'yii\db\Connection',
	'dsn' => 'sqlite:../db/base.db',
	'username' => '',
	'password' => '',
	'charset' => 'utf8',
	'on afterOpen' => function ($event) {
		$event->sender->createCommand("PRAGMA foreign_keys=ON;")->execute();
	}
];
