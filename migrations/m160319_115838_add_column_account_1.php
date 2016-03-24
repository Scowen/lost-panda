<?php

use yii\db\Migration;

class m160319_115838_add_column_account_1 extends Migration
{
    public function up()
    {
        $this->addColumn("{{account}}", "show_rankbar", $this->boolean()->defaultValue(false));
    }

    public function down()
    {
        $this->dropColumn("{{account}}", "show_rankbar");
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
