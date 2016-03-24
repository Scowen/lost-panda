<?php

use yii\db\Schema;
use yii\db\Migration;

class m160324_101349_insert_market_test_1 extends Migration
{
    public function up()
    {
        $this->insert("{{market}}", array(
            'account' => 1,
            'price' => 1000000,
            'diamond' => 4,
        ));
    }

    public function down()
    {
        $this->truncateTable("{{market}}");
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
