<?php

use yii\db\Schema;
use yii\db\Migration;

class m160324_105455_create_table_property_auction extends Migration
{
    public function up()
    {
        $this->createTable(
            '{{property_auction}}',
            array(
                'id'                            => $this->primaryKey(),
                'account'                       => $this->integer()->notNull(),
                'property'                      => $this->integer()->notNull(),
                'expires'                       => $this->integer()->notNull(),
                'start_price'                   => $this->double()->notNull(),
                'buy_now'                       => $this->double(),
                'created'                       => $this->timestamp()->notNull(),
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
        $this->dropTable("{{property_auction}}");
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
