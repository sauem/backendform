<?php

use yii\db\Migration;

/**
 * Class m210808_134226_add_column_post
 */
class m210808_134226_add_column_post extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('articles', 'show_home', $this->tinyInteger()->defaultValue(1));

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210808_134226_add_column_post cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210808_134226_add_column_post cannot be reverted.\n";

        return false;
    }
    */
}
