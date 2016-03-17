<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rank".
 *
 * @property integer $id
 * @property string $name
 * @property string $created
 * @property double $experience_required
 * @property integer $offence_multiplier
 * @property integer $defence_multiplier
 * @property integer $success_multiplier
 * @property integer $operation_bonus_multiplier
 * @property integer $time_prison
 * @property integer $reward_money
 * @property integer $reward_bullets
 * @property integer $reward_gold
 * @property integer $reward_weapon
 * @property integer $reward_vehicle
 * @property integer $reward_aircraft
 */
class Rank extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rank';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['created'], 'safe'],
            [['experience_required'], 'number'],
            [['offence_multiplier', 'defence_multiplier', 'success_multiplier', 'operation_bonus_multiplier', 'time_prison', 'reward_money', 'reward_bullets', 'reward_gold', 'reward_weapon', 'reward_vehicle', 'reward_aircraft'], 'integer'],
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
            'experience_required' => 'Experience Required',
            'offence_multiplier' => 'Offence Multiplier',
            'defence_multiplier' => 'Defence Multiplier',
            'success_multiplier' => 'Success Multiplier',
            'operation_bonus_multiplier' => 'Operation Bonus Multiplier',
            'time_prison' => 'Time Prison',
            'reward_money' => 'Reward Money',
            'reward_bullets' => 'Reward Bullets',
            'reward_gold' => 'Reward Gold',
            'reward_weapon' => 'Reward Weapon',
            'reward_vehicle' => 'Reward Vehicle',
            'reward_aircraft' => 'Reward Aircraft',
        ];
    }
}
