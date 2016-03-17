<?php

use yii\db\Schema;
use yii\db\Migration;

class m151216_125433_insert_users extends Migration
{
    public function up()
    {
        $this->insert("{{user}}", array(
            'username' => 'lmscowen@gmail.com',
            'password' => Yii::$app->getSecurity()->generatePasswordHash('Password'),
            'admin' => 100,
            'email' => 'lmscowen@gmail.com',
        ));
    }

    public function down()
    {
        echo "m151216_125433_insert_users cannot be reverted.\n";

        return false;
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
