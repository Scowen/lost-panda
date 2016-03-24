<?php

use yii\db\Schema;
use yii\db\Migration;

class m160324_110810_insert_auction_test_1 extends Migration
{
    public function up()
    {
        $this->insert("{{property_auction}}", array(
            'account' => 1,
            'property' => 1,
            'expires' => time()+86400,
            'start_price' => 100000000,
            'buy_now' => 150000000,
        ));
        $this->insert("{{property_auction_bid}}", array(
            'account' => 1,
            'auction' => 1,
            'amount' => 100100000,
        ));
    }

    public function down()
    {
        $this->truncateTable("{{property_auction}}");
        $this->truncateTable("{{property_auction_bid}}");
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
