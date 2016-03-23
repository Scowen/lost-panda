<?php

use yii\db\Schema;
use yii\db\Migration;

class m160317_111028_insert_ranks_1 extends Migration
{
    public function up()
    {
        $this->insert("{{rank}}", array(
            'name' => 'Volunteer',
        ));
        $this->insert("{{rank_prison}}", array(
            'name' => 'Novice',
        ));
        $this->insert("{{rank_money}}", array(
            'name' => 'Homeless',
        ));

        /*
            Possible Prison Ranks:
            Novice(Starting Skill Level)
            Apprentice(Level 10)
            Regular(Level 30)
            Expert(Level 40)
            A. Expert(Level 50)
            Master(Level 60)
            A. Master (Level 70)
            G. Master (Level 80)
            Completer(Level 90)
            Transcender(Level 100)
        */
    }

    public function down()
    {
        $this->truncateTable("{{rank}}");
        $this->truncateTable("{{rank_prison}}");
        $this->truncateTable("{{rank_money}}");
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
