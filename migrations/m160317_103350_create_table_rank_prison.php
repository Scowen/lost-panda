<?php

use yii\db\Schema;
use yii\db\Migration;

class m160317_103350_create_table_rank_prison extends Migration
{
    public function up()
    {
        $this->createTable(
            '{{rank_prison}}',
            array(
                'id'                            => $this->primaryKey(),
                'name'                          => $this->string(30)->notNull(),
                'created'                       => $this->timestamp()->notNull(),
                'experience_required'           => $this->double()->notNull()->defaultValue(0),
                'success_multiplier'            => $this->integer()->notNull()->defaultValue(1),
                'reduced_time_prison'           => $this->integer()->notNull()->defaultValue(0),
                'reward_experience'             => $this->integer(),
                'reward_money'                  => $this->integer(),
                'reward_bullets'                => $this->integer(),
                'reward_diamond'                => $this->integer(),
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
        $this->dropTable("{{rank_prison}}");
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
