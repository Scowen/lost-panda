<?php

use yii\db\Schema;
use yii\db\Migration;

class m160317_113955_create_table_aircraft extends Migration
{
    public function up()
    {
        $this->createTable(
            '{{aircraft}}',
            array(
                'id'                            => $this->primaryKey(),
                'name'                          => $this->string(30)->notNull(),
                'created'                       => $this->timestamp()->notNull(),
                'price'                         => $this->double()->notNull(),
                'fly_time'                      => $this->integer()->notNull()->defaultValue(1),
                'capacity'                      => $this->integer()->notNull(),
                'image'                         => $this->string(),
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
        $this->dropTable("{{aircraft}}");

        return true;
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
