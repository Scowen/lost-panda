<?php

use yii\db\Schema;
use yii\db\Migration;

class m160317_124651_create_table_location extends Migration
{
    public function up()
    {
        $this->createTable(
            '{{location}}',
            array(
                'id'                            => $this->primaryKey(),
                'name'                          => $this->string(30)->notNull(),
                'flag'                          => $this->string(),
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
        $this->dropTable("{{location}}");
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
