<?php

use yii\db\Migration;

/**
 * Class m210328_131546_add_column_prodcut
 */
class m210328_131546_add_column_prodcut extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('products', 'default_archive', $this->integer()->null());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210328_131546_add_column_prodcut cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210328_131546_add_column_prodcut cannot be reverted.\n";

        return false;
    }
    */
}
