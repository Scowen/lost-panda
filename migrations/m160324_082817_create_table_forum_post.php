<?php

use yii\db\Schema;
use yii\db\Migration;

class m160324_082817_create_table_forum_post extends Migration
{
    public function up()
    {
        $this->createTable(
            '{{forum_post}}',
            array(
                'id'                            => $this->primaryKey(),
                'topic'                         => $this->integer()->notNull(),
                'account'                       => $this->integer()->notNull(),
                'content'                       => $this->text()->notNull(),
                'created'                       => $this->timestamp()->notNull(),
                'locked'                        => $this->boolean()->notNull()->defaultValue(false),
                'deleted'                       => $this->boolean()->notNull()->defaultValue(false),
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
        $this->dropTable("{{forum_post}}");
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
