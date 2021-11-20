<?php

use yii\db\Migration;

/**
 * Class m211119_223449_alter_table_tech
 */
class m211119_223449_alter_table_tech extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('technology', 'avatar_id', $this->integer()->null());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m211119_223449_alter_table_tech cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211119_223449_alter_table_tech cannot be reverted.\n";

        return false;
    }
    */
}
