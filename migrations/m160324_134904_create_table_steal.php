<?php

use yii\db\Schema;
use yii\db\Migration;

class m160324_134904_create_table_steal extends Migration
{
    public function up()
    {
        $this->createTable(
            '{{steal}}',
            array(
                'id'                            => $this->primaryKey(),
                'type'                          => $this->string()->notNull(),
                'name'                          => $this->string()->notNull(),
                'min_reward_money'              => $this->double()->notNull(),
                'max_reward_money'              => $this->double()->notNull(),
                'min_reward_bullet'             => $this->double()->notNull(),
                'max_reward_bullet'             => $this->double()->notNull(),
                'success_rate'                  => $this->integer()->notNull()->defaultValue(75),
                'success_exp'                   => $this->integer()->notNull(),
                'failure_exp'                   => $this->integer()->notNull(),
                'created'                       => $this->timestamp()->notNull(),
            ),
            implode(' ', array(
                'ENGINE          = InnoDB',
                'DEFAULT CHARSET = utf8',
                'COLLATE         = utf8_general_ci',
                'COMMENT         = ""',
                'AUTO_INCREMENT  = 1',
            ))
        );

        $this->createTable(
            '{{steal_drop_table}}',
            array(
                'id'                            => $this->primaryKey(),
                'steal'                         => $this->integer()->notNull(),
                'weapon'                        => $this->integer(),
                'vehicle'                       => $this->integer(),
                'aircraft'                      => $this->integer(),
                'chance'                        => $this->integer(), // The random number will be 1000. EG: `chance`/1000
                'created'                       => $this->timestamp()->notNull(),
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
        $this->dropTable("{{steal}}");
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
