<?php

use yii\db\Migration;

/**
 * Class m210803_171444_alter_table_sub_text
 */
class m210803_171444_alter_table_sub_text extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('archives', 'sub_text', $this->string(255)->null());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210803_171444_alter_table_sub_text cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210803_171444_alter_table_sub_text cannot be reverted.\n";

        return false;
    }
    */
}
