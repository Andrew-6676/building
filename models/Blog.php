<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blog".
 *
 * @property integer $id
 * @property string $title
 * @property string $b_text
 * @property integer $id_category
 * @property boolean $published
 * @property integer $id_user
 *
 * @property Users $idUser
 * @property Users $idUser0
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
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('db_build');
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['b_text'], 'string'],
            [['id_category', 'id_user'], 'integer'],
            [['published'], 'boolean'],
            [['title'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'b_text' => 'B Text',
            'id_category' => 'Id Category',
            'published' => 'Published',
            'id_user' => 'Id User',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUser()
    {
        return $this->hasOne(Users::className(), ['id' => 'id_user']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUser0()
    {
        return $this->hasOne(Users::className(), ['id' => 'id_user']);
    }
}
