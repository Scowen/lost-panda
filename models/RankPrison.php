<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rank_prison".
 *
 * @property integer $id
 * @property string $name
 * @property string $created
 * @property double $experience_required
 * @property integer $success_multiplier
 * @property integer $reduced_time_prison
 * @property integer $reward_experience
 * @property integer $reward_money
 * @property integer $reward_bullets
 * @property integer $reward_gold
 * @property integer $reward_weapon
 * @property integer $reward_vehicle
 * @property integer $reward_aircraft
 */
class RankPrison extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rank_prison';
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
            [['success_multiplier', 'reduced_time_prison', 'reward_experience', 'reward_money', 'reward_bullets', 'reward_gold', 'reward_weapon', 'reward_vehicle', 'reward_aircraft'], 'integer'],
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
            'success_multiplier' => 'Success Multiplier',
            'reduced_time_prison' => 'Reduced Time Prison',
            'reward_experience' => 'Reward Experience',
            'reward_money' => 'Reward Money',
            'reward_bullets' => 'Reward Bullets',
            'reward_gold' => 'Reward Gold',
            'reward_weapon' => 'Reward Weapon',
            'reward_vehicle' => 'Reward Vehicle',
            'reward_aircraft' => 'Reward Aircraft',
        ];
    }
}
