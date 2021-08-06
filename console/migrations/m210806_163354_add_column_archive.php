<?php

use yii\db\Migration;

/**
 * Class m210806_163354_add_column_archive
 */
class m210806_163354_add_column_archive extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('archives', 'layout_show', $this->string(50)->null()->defaultValue('default'));

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210806_163354_add_column_archive cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210806_163354_add_column_archive cannot be reverted.\n";

        return false;
    }
    */
}
