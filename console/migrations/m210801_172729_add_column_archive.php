<?php

use yii\db\Migration;

/**
 * Class m210801_172729_add_column_archive
 */
class m210801_172729_add_column_archive extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('archives', 'layout', $this->string(50)->defaultValue('default'));
        $this->addColumn('archives', 'banner_id', $this->integer(11)->null());
        $this->addColumn('archives', 'sub_title', $this->string(255)->null());
        $this->addColumn('archives', 'sub_text', $this->integer(255)->null());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210801_172729_add_column_archive cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210801_172729_add_column_archive cannot be reverted.\n";

        return false;
    }
    */
}
