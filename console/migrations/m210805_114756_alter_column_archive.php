<?php

use yii\db\Migration;

/**
 * Class m210805_114756_alter_column_archive
 */
class m210805_114756_alter_column_archive extends Migration
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
        echo "m210805_114756_alter_column_archive cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210805_114756_alter_column_archive cannot be reverted.\n";

        return false;
    }
    */
}
