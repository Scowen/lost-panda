<?php

use yii\db\Schema;
use yii\db\Migration;

class m160317_094510_insert_account_1 extends Migration
{
    public function up()
    {
        $this->insert("{{account}}", array(
            'user' => 1,
            'name' => 'Xylum',
        ));
    }

    public function down()
    {
        $this->truncateTable("{{account}}");
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
