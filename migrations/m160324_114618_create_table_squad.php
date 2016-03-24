<?php

use yii\db\Schema;
use yii\db\Migration;

class m160324_114618_create_table_squad extends Migration
{
    public function up()
    {
        $this->createTable(
            '{{squad}}',
            array(
                'id'                            => $this->primaryKey(),
                'name'                          => $this->integer()->notNull(),
                'leader'                        => $this->integer(),
                'co_leader'                     => $this->integer(),
                'left_lieutenant'               => $this->integer(),
                'right_lieutenant'              => $this->integer(),
                'money'                         => $this->double()->notNull()->defaultValue(0),
                'bullet'                        => $this->double()->notNull()->defaultValue(0),
                'diamond'                       => $this->double()->notNull()->defaultValue(0),
                'tax_money'                     => $this->double(),
                'tax_bullet'                    => $this->double(),
                'tax_diamond'                   => $this->double(),
                'tax_frequency_days'            => $this->integer(),
                'profile'                       => $this->text(),
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
        $this->dropTable("{{squad}}");
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
