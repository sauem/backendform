<?php

use yii\db\Migration;

/**
 * Class m211128_235133_add_column_brochure
 */
class m211128_235133_add_column_brochure extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('banners', 'sort_order', $this->integer()->defaultValue(50));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m211128_235133_add_column_brochure cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211128_235133_add_column_brochure cannot be reverted.\n";

        return false;
    }
    */
}
