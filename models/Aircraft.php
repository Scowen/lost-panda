<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aircraft".
 *
 * @property integer $id
 * @property string $name
 * @property string $created
 * @property double $price
 * @property integer $fly_time
 * @property integer $capacity
 * @property string $image
 */
class Aircraft extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'aircraft';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'price', 'capacity'], 'required'],
            [['created'], 'safe'],
            [['price'], 'number'],
            [['fly_time', 'capacity'], 'integer'],
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
            'fly_time' => 'Fly Time',
            'capacity' => 'Capacity',
            'image' => 'Image',
        ];
    }
}
