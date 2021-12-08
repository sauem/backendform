<?php

use yii\db\Migration;

/**
 * Class m211208_154645_add_column_article
 */
class m211208_154645_add_column_article extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('articles', 'is_top', $this->tinyInteger()->defaultValue(1));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m211208_154645_add_column_article cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211208_154645_add_column_article cannot be reverted.\n";

        return false;
    }
    */
}
