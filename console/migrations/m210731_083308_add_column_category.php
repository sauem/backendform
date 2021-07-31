<?php

use yii\db\Migration;

/**
 * Class m210731_083308_add_column_category
 */
class m210731_083308_add_column_category extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('archives', 'show_home', $this->tinyInteger(1)->defaultValue(0));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210731_083308_add_column_category cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210731_083308_add_column_category cannot be reverted.\n";

        return false;
    }
    */
}
