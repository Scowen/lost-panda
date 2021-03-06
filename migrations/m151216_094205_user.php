<?php

use yii\db\Schema;
use yii\db\Migration;

class m151216_094205_user extends Migration
{
    public function up()
    {
        $this->createTable(
            '{{user}}',
            array(
                'id'            => $this->primaryKey(),
                'username'      => $this->string(128)->notNull(),
                'password'      => $this->string(128)->notNull(),
                'authKey'       => $this->text(),
                'accessToken'   => $this->text(),
                'created'       => $this->timestamp()->notNull(),
                'admin'         => $this->integer()->notNull()->defaultValue(10),
                'email'         => $this->string(128),
                'diamond'       => $this->double()->notNull()->defaultValue(0),
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
        $this->dropTable("{{user}}");
    }
}
