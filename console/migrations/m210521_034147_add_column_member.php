<?php

use yii\db\Migration;

/**
 * Class m210521_034147_add_column_member
 */
class m210521_034147_add_column_member extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('member', 'desc', $this->string(255)->null());
        $this->addColumn('member', 'type', $this->string(50)->defaultValue('member')->null());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210521_034147_add_column_member cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210521_034147_add_column_member cannot be reverted.\n";

        return false;
    }
    */
}
