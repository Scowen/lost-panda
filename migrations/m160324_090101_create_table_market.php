<?php

use yii\db\Schema;
use yii\db\Migration;

class m160324_090101_create_table_market extends Migration
{
    public function up()
    {
        $this->createTable(
            '{{market}}',
            array(
                'id'                            => $this->primaryKey(),
                'account'                       => $this->integer()->notNull(),
                'price'                         => $this->double()->notNull(),
                'created'                       => $this->timestamp()->notNull(),
                'aircraft'                      => $this->integer(),
                'vehicle'                       => $this->integer(),
                'weapon'                        => $this->integer(),
                'diamond'                       => $this->integer(),
                'bullet'                        => $this->integer(),
                'purchased_by'                  => $this->integer(),
                'purchased_at'                  => $this->integer(),
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
        $this->dropTable("{{market}}");
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
