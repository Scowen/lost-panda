<?php

use yii\db\Schema;
use yii\db\Migration;

class m160317_131202_insert_location_1 extends Migration
{
    public function up()
    {
        $this->insert("{{location}}", array(
            'name' => 'Cardiff, Wales',
        ));
    }

    public function down()
    {
        $this->truncateTable("{{location}}");
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
