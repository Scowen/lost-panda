<?php

use yii\db\Schema;
use yii\db\Migration;

class m160324_083100_create_table_forum_edit extends Migration
{
    public function up()
    {
        $this->createTable(
            '{{forum_edit}}',
            array(
                'id'                            => $this->primaryKey(),
                'post'                          => $this->integer(),
                'account'                       => $this->integer()->notNull(),
                'created'                       => $this->timestamp()->notNull(),
                'content_old'                   => $this->text()->notNull(),
                'content_new'                   => $this->text()->notNull(),
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
        $this->dropTable("{{forum_edit}}");
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
