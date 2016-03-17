<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rank_money".
 *
 * @property integer $id
 * @property string $name
 * @property string $created
 * @property double $money_required
 */
class RankMoney extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rank_money';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['created'], 'safe'],
            [['money_required'], 'number'],
            [['name'], 'string', 'max' => 30]
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
            'money_required' => 'Money Required',
        ];
    }
}
