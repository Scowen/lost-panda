<?php

use yii\db\Schema;
use yii\db\Migration;

class m160324_083239_create_table_forum_likes extends Migration
{
    public function up()
    {
        $this->createTable(
            '{{forum_likes}}',
            array(
                'id'                            => $this->primaryKey(),
                'post'                          => $this->integer()->notNull(),
                'account'                       => $this->integer()->notNull(),
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
        $this->dropTable("{{forum_likes}}");
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
