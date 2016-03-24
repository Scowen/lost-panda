<?php

use yii\db\Schema;
use yii\db\Migration;

class m160324_082227_create_table_forum_topic extends Migration
{
    public function up()
    {
        $this->createTable(
            '{{forum_topic}}',
            array(
                'id'                            => $this->primaryKey(),
                'name'                          => $this->string(64)->notNull(),
                'account'                       => $this->integer()->notNull(),
                'created'                       => $this->timestamp()->notNull(),
                'admin'                         => $this->integer()->defaultValue(0),
                'sticky'                        => $this->boolean()->notNull()->defaultValue(false),
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
        $this->dropTable("{{forum_topic}}");
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
