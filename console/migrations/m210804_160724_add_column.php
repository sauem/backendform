<?php

use yii\db\Migration;

/**
 * Class m210804_160724_add_column
 */
class m210804_160724_add_column extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('products', 'relations', $this->string(255)->null());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210804_160724_add_column cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210804_160724_add_column cannot be reverted.\n";

        return false;
    }
    */
}
