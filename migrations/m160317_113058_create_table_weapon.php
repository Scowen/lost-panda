<?php

use yii\db\Schema;
use yii\db\Migration;

class m160317_113058_create_table_weapon extends Migration
{
    public function up()
    {
        $this->createTable(
            '{{weapon}}',
            array(
                'id'                            => $this->primaryKey(),
                'name'                          => $this->string(30)->notNull(),
                'created'                       => $this->timestamp()->notNull(),
                'price'                         => $this->double()->notNull(),
                'offence_multiplier'            => $this->integer()->notNull()->defaultValue(1),
                'accuracy'                      => $this->integer(3)->notNull(),
                'image'                         => $this->string(),
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
        $this->dropTable("{{weapon}}");
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
