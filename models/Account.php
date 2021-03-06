<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "account".
 *
 * @property integer $id
 * @property integer $user
 * @property string $name
 * @property integer $created
 * @property integer $last_active
 * @property integer $health
 * @property string $profile
 * @property integer $banned
 * @property string $banned_reason
 * @property integer $banned_by
 * @property integer $banned_expiration
 * @property integer $hidden
 * @property integer $active
 * @property integer $squad
 * @property integer $location
 * @property double $money
 * @property double $bullets
 * @property double $experience
 * @property double $experience_prison
 * @property integer $timer_steal_weapon
 * @property integer $timer_steal_vehicle
 * @property integer $timer_steal_aircraft
 * @property integer $timer_operation
 * @property integer $timer_mission
 * @property integer $timer_rescue
 * @property integer $timer_prison
 * @property integer $timer_hospital
 * @property integer $timer_fly
 * @property integer $show_rankbar
 */
class Account extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'account';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user', 'name'], 'required'],
            [['user', 'created', 'last_active', 'health', 'banned', 'banned_by', 'banned_expiration', 'hidden', 'active', 'squad', 'location', 'timer_steal_weapon', 'timer_steal_vehicle', 'timer_steal_aircraft', 'timer_operation', 'timer_mission', 'timer_rescue', 'timer_prison', 'timer_hospital', 'timer_fly', 'show_rankbar'], 'integer'],
            [['profile'], 'string'],
            [['money', 'bullets', 'experience', 'experience_prison'], 'number'],
            [['name'], 'string', 'max' => 30],
            [['banned_reason'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user' => 'User',
            'name' => 'Name',
            'created' => 'Created',
            'last_active' => 'Last Active',
            'health' => 'Health',
            'profile' => 'Profile',
            'banned' => 'Banned',
            'banned_reason' => 'Banned Reason',
            'banned_by' => 'Banned By',
            'banned_expiration' => 'Banned Expiration',
            'hidden' => 'Hidden',
            'active' => 'Active',
            'squad' => 'Squad',
            'location' => 'Location',
            'money' => 'Money',
            'bullets' => 'Bullets',
            'experience' => 'Experience',
            'experience_prison' => 'Experience Prison',
            'timer_steal_weapon' => 'Timer Steal Weapon',
            'timer_steal_vehicle' => 'Timer Steal Vehicle',
            'timer_steal_aircraft' => 'Timer Steal Aircraft',
            'timer_operation' => 'Timer Operation',
            'timer_mission' => 'Timer Mission',
            'timer_rescue' => 'Timer Rescue',
            'timer_prison' => 'Timer Prison',
            'timer_hospital' => 'Timer Hospital',
            'timer_fly' => 'Timer Fly',
            'show_rankbar' => 'Show Rankbar',
        ];
    }
}
