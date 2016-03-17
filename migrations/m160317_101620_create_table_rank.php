<?php

use yii\db\Schema;
use yii\db\Migration;

class m160317_101620_create_table_rank extends Migration
{
    public function up()
    {
        $this->createTable(
            '{{rank}}',
            array(
                'id'                            => $this->primaryKey(),
                'name'                          => $this->string(30)->notNull(),
                'created'                       => $this->timestamp()->notNull(),
                'experience_required'           => $this->double()->notNull()->defaultValue(0),
                'offence_multiplier'            => $this->integer()->notNull()->defaultValue(1),
                'defence_multiplier'            => $this->integer()->notNull()->defaultValue(1),
                'success_multiplier'            => $this->integer()->notNull()->defaultValue(1),
                'operation_bonus_multiplier'    => $this->integer()->notNull()->defaultValue(1),
                'time_prison'                   => $this->integer()->notNull()->defaultValue(30),
                'reward_money'                  => $this->integer(),
                'reward_bullets'                => $this->integer(),
                'reward_gold'                   => $this->integer(),
                'reward_weapon'                 => $this->integer(),
                'reward_vehicle'                => $this->integer(),
                'reward_aircraft'               => $this->integer(),
            ),
            implode(' ', array(
                'ENGINE          = InnoDB',
                'DEFAULT CHARSET = utf8',
                'COLLATE         = utf8_general_ci',
                'COMMENT         = ""',
                'AUTO_INCREMENT  = 1',
            ))
        );
    }

    public function down()
    {   
        $this->dropTable("{{rank}}");

        return true;
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
