<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "purchases".
 *
 * @property integer $id
 * @property string $product
 * @property integer $quantity
 * @property integer $price
 * @property integer $id_status
 * @property string $descr
 * @property integer $id_user
 *
 * @property Users $idUser
 */
class Purchases extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'purchases';
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
            [['quantity', 'price', 'id_status', 'id_user'], 'integer'],
            [['descr'], 'string'],
            [['product'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product' => 'Product',
            'quantity' => 'Quantity',
            'price' => 'Price',
            'id_status' => 'Id Status',
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
}
