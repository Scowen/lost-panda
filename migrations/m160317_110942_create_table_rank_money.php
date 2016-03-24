<?php

use yii\db\Schema;
use yii\db\Migration;

class m160317_110942_create_table_rank_money extends Migration
{
    public function up()
    {
        $this->createTable(
            '{{rank_money}}',
            array(
                'id'                            => $this->primaryKey(),
                'name'                          => $this->string(30)->notNull(),
                'created'                       => $this->timestamp()->notNull(),
                'money_required'                => $this->double()->notNull()->defaultValue(0),
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
        $this->dropTable("{{rank_money}}");
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
