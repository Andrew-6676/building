<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "events".
 *
 * @property integer $id
 * @property integer $id_product
 * @property integer $e_date
 * @property integer $id_status
 * @property string $descr
 * @property integer $id_user
 *
 * @property Users $idUser
 */
class Events extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'events';
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
            [['id_product', 'e_date', 'id_status', 'id_user'], 'integer'],
            [['descr'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id'         => 'ID',
            'id_product' => 'Id Product',
            'e_date'     => 'E Date',
            'id_status'  => 'Id Status',
            'descr'      => 'Descr',
            'id_user'    => 'Id User',
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
    public function getStatus()
    {
        return $this->hasOne(Statuses::className(), ['id' => 'id_status']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Purchases::className(), ['id' => 'id_product']);
    }
}
