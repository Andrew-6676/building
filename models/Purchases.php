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
 * @property string $descr
 * @property integer $id_user
 *
 * @property Events[] $events
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
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['quantity', 'price', 'id_user'], 'integer'],
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
            'descr' => 'Descr',
            'id_user' => 'Id User',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEvents()
    {
        return $this->hasMany(Events::className(), ['id_product' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['id' => 'id_user']);
    }
}
