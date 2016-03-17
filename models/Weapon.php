<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "weapon".
 *
 * @property integer $id
 * @property string $name
 * @property string $created
 * @property double $price
 * @property integer $offence_multiplier
 * @property integer $accuracy
 * @property string $image
 */
class Weapon extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'weapon';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'price', 'accuracy'], 'required'],
            [['created'], 'safe'],
            [['price'], 'number'],
            [['offence_multiplier', 'accuracy'], 'integer'],
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
            'offence_multiplier' => 'Offence Multiplier',
            'accuracy' => 'Accuracy',
            'image' => 'Image',
        ];
    }
}
