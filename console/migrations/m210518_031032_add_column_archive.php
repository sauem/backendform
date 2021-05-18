<?php

use yii\db\Migration;

/**
 * Class m210518_031032_add_column_archive
 */
class m210518_031032_add_column_archive extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('archives', 'icon', $this->string(50)->null());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210518_031032_add_column_archive cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210518_031032_add_column_archive cannot be reverted.\n";

        return false;
    }
    */
}
