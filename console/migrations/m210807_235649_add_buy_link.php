<?php

use yii\db\Migration;

/**
 * Class m210807_235649_add_buy_link
 */
class m210807_235649_add_buy_link extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('products', 'buy_link', $this->text()->null());
        $this->alterColumn('products', 'attr_text', $this->text()->null());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210807_235649_add_buy_link cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210807_235649_add_buy_link cannot be reverted.\n";

        return false;
    }
    */
}
