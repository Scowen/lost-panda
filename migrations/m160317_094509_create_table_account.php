<?php

use yii\db\Schema;
use yii\db\Migration;

class m160317_094509_create_table_account extends Migration
{
    public function up()
    {
        $this->createTable(
            '{{account}}',
            array(
                'id'                    => $this->primaryKey(),
                'user'                  => $this->integer()->notNull(),
                'name'                  => $this->string(30)->notNull(),
                'created'               => $this->integer(),
                'last_active'           => $this->integer(),
                'health'                => $this->integer(3)->notNull()->defaultValue(100),
                'profile'               => $this->text(),
                'banned'                => $this->boolean()->notNull()->defaultValue(false),
                'banned_reason'         => $this->string(),
                'banned_by'             => $this->integer(),
                'banned_expiration'     => $this->integer(),
                'hidden'                => $this->boolean()->notNull()->defaultValue(false),
                'active'                => $this->boolean()->notNull()->defaultValue(false),
                'squad'                 => $this->integer(),
                'location'              => $this->integer()->defaultValue(1),
                'money'                 => $this->double()->notNull()->defaultValue(0),
                'bullets'               => $this->double()->notNull()->defaultValue(0),
                'experience'            => $this->double()->notNull()->defaultValue(0),
                'experience_prison'     => $this->double()->notNull()->defaultValue(0),
                'timer_steal_weapon'    => $this->integer()->notNull()->defaultValue(0),
                'timer_steal_vehicle'   => $this->integer()->notNull()->defaultValue(0),
                'timer_steal_aircraft'  => $this->integer()->notNull()->defaultValue(0),
                'timer_operation'       => $this->integer()->notNull()->defaultValue(0),
                'timer_mission'         => $this->integer()->notNull()->defaultValue(0),
                'timer_rescue'          => $this->integer()->notNull()->defaultValue(0),
                'timer_prison'          => $this->integer()->notNull()->defaultValue(0),
                'timer_hospital'        => $this->integer()->notNull()->defaultValue(0),
                'timer_fly'             => $this->integer()->notNull()->defaultValue(0),
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
        $this->dropTable("{{account}}");
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
