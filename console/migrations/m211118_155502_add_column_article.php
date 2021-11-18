<?php

use yii\db\Migration;

/**
 * Class m211118_155502_add_column_article
 */
class m211118_155502_add_column_article extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('articles', 'is_new', $this->tinyInteger()->defaultValue(0));
        $this->addColumn('articles', 'read_type', $this->tinyInteger()->defaultValue(0));
        $this->addColumn('articles', 'direct_url', $this->string(255)->null());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m211118_155502_add_column_article cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211118_155502_add_column_article cannot be reverted.\n";

        return false;
    }
    */
}
