<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blog".
 *
 * @property integer $id
 * @property string $b_date
 * @property string $title
 * @property string $b_text
 * @property integer $id_category
 * @property boolean $published
 * @property integer $id_user
 *
 * @property Users $idUser
 */
class Blog extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'blog';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['b_date', 'title', 'tags'], 'required'],
			[['b_date'], 'safe'],
			[['b_text'], 'string'],
			[['id_category', 'id_user'], 'integer'],
			[['published'], 'boolean'],
			[['title', 'tags'], 'string', 'max' => 255]
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'b_date' => 'Дата',
			'title' => 'Заголовок',
			'b_text' => 'Содержание',
			'tags' => 'Теги',
			'id_category' => 'Категория',
			'published' => 'Опубликовать',
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
	public function getCategory()
	{
		return $this->hasOne(Categories::className(), ['id' => 'id_category']);
	}
}
