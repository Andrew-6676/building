<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property string $name
 * @property string $pass
 * @property string $descr
 *
 * @property Blog[] $blogs
 * @property Blog[] $blogs0
 * @property Categories[] $categories
 * @property Events[] $events
 * @property Purchases[] $purchases
 * @property Statuses[] $statuses
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
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
            [['name'], 'string', 'max' => 150],
            [['pass'], 'string', 'max' => 50],
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
            'pass' => 'Pass',
            'descr' => 'Descr',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBlogs()
    {
        return $this->hasMany(Blog::className(), ['id_user' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategories()
    {
        return $this->hasMany(Categories::className(), ['id_user' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEvents()
    {
        return $this->hasMany(Events::className(), ['id_user' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPurchases()
    {
        return $this->hasMany(Purchases::className(), ['id_user' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatuses()
    {
        return $this->hasMany(Statuses::className(), ['id_user' => 'id']);
    }

	/*-------------------------------------------------------------------------*/

	/**
	 * Finds user by username
	 *
	 * @param  string      $username
	 * @return static|null
	 */
//	public function findByUsername($username)
//	{
//		$usr = Users::find()->where('name="'.$username.'"')->one();
//
//		if ($usr) {
//			return $usr;
//		}
//
//		return null;
//	}
////
//	public function validatePassword($password)
//	{
//		return $this->pass === $password;
//	}

}
