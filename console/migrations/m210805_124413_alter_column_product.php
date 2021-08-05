<?php

use yii\db\Migration;

/**
 * Class m210805_124413_alter_column_product
 */
class m210805_124413_alter_column_product extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('products', 'attr_text', $this->string(255)->null());
        $this->addColumn('products', 'sub_name', $this->string(255)->null());
        $this->addColumn('products', 'banner_id', $this->integer()->null());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210805_124413_alter_column_product cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210805_124413_alter_column_product cannot be reverted.\n";

        return false;
    }
    */
}
