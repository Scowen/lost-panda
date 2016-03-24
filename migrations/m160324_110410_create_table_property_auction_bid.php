<?php

use yii\db\Schema;
use yii\db\Migration;

class m160324_110410_create_table_property_auction_bid extends Migration
{
    public function up()
    {
        $this->createTable(
            '{{property_auction_bid}}',
            array(
                'id'                            => $this->primaryKey(),
                'account'                       => $this->integer()->notNull(),
                'auction'                       => $this->integer()->notNull(),
                'amount'                        => $this->double()->notNull(),
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
        $this->dropTable("{{property_auction_bid}}");
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
