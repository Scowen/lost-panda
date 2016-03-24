<?php

use yii\db\Schema;
use yii\db\Migration;

class m160324_084615_insert_forum_test_1 extends Migration
{
    public function up()
    {
        $this->insert("{{forum_topic}}", array(
            'name' => 'Topic',
            'account' => 1,
        ));
        $this->insert("{{forum_post}}", array(
            'topic' => 1,
            'account' => 1,
            'content' => 'Old Post',
        ));
        $this->insert("{{forum_edit}}", array(
            'post' => 1,
            'account' => 1,
            'content_old' => 'Old Post',
            'content_new' => 'Post',
        ));
        $this->insert("{{forum_likes}}", array(
            'post' => 1,
            'account' => 1,
        ));
    }

    public function down()
    {
        $this->truncateTable("{{forum_topic}}");
        $this->truncateTable("{{forum_post}}");
        $this->truncateTable("{{forum_edit}}");
        $this->truncateTable("{{forum_likes}}");
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
