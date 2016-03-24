<?php

use yii\db\Migration;

class m160324_155236_insert_steal_test_1 extends Migration
{
    public function up()
    {
        $this->insert("{{steal}}", array(
            'type' => "WEAPON",
            'name' => "Steal a moving munitions convoy",
            'min_reward_money' => 500,
            'max_reward_money' => 50000,
            'success_rate' => 67,
            'success_exp' => 50,
            'failure_exp' => 20,
        ));
        $this->insert("{{steal}}", array(
            'type' => "VEHICLE",
            'name' => "Sneak into a nearby military base",
            'min_reward_money' => 10000,
            'max_reward_money' => 100000,
            'success_rate' => 40,
            'success_exp' => 90,
            'failure_exp' => 35,
        ));
        $this->insert("{{steal}}", array(
            'type' => "AIRCRAFT",
            'name' => "Hijack an aircraft mid-flight",
            'min_reward_money' => 60000,
            'max_reward_money' => 80000,
            'success_rate' => 12,
            'success_exp' => 110,
            'failure_exp' => 50,
        ));
    }

    public function down()
    {
        $this->truncateTable("{{steal}}");
    }
    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
