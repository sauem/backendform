<?php

use yii\db\Migration;

/**
 * Class m210610_151851_add_column_banner
 */
class m210610_151851_add_column_banner extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('banners', 'sub_title', $this->string(255)->null());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210610_151851_add_column_banner cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210610_151851_add_column_banner cannot be reverted.\n";

        return false;
    }
    */
}
