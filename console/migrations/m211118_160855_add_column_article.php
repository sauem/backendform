<?php

use yii\db\Migration;

/**
 * Class m211118_160855_add_column_article
 */
class m211118_160855_add_column_article extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('testimonials', 'type', $this->string(25)->defaultValue('guest'));
        $this->addColumn('archives', 'sort_order', $this->integer()->defaultValue(50));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m211118_160855_add_column_article cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211118_160855_add_column_article cannot be reverted.\n";

        return false;
    }
    */
}
