<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "categories".
 *
 * @property integer $id
 * @property string $name
 * @property string $descr
 * @property integer $id_user
 *
 * @property Users $idUser
 */
class Categories extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'categories';
	}

	/**
	 * @return \yii\db\Connection the database connection used by this AR class.
	 */
//    public static function getDb()
//    {
//        return Yii::$app->get('db_build');
//    }

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['id_user'], 'integer'],
			[['name'], 'string', 'max' => 50],
			[['descr'], 'string', 'max' => 255]
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'name' => 'Name',
			'descr' => 'Descr',
			'id_user' => 'Id User',
		];
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getUser()
	{
		return $this->hasOne(Users::className(), ['id' => 'id_user']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getParent()
	{
		return $this->hasOne(Categories::className(), ['id' => 'id_parent']);
	}

	/*----------------------------------------------------*/

}
