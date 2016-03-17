<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vehicle".
 *
 * @property integer $id
 * @property string $name
 * @property string $created
 * @property double $price
 * @property integer $defence_multiplier
 * @property integer $speed
 * @property string $image
 */
class Vehicle extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vehicle';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'price', 'speed'], 'required'],
            [['created'], 'safe'],
            [['price'], 'number'],
            [['defence_multiplier', 'speed'], 'integer'],
            [['name'], 'string', 'max' => 30],
            [['image'], 'string', 'max' => 255]
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
            'created' => 'Created',
            'price' => 'Price',
            'defence_multiplier' => 'Defence Multiplier',
            'speed' => 'Speed',
            'image' => 'Image',
        ];
    }
}
