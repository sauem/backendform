<?php

use yii\db\Migration;

/**
 * Class m211130_023516_alter_column_banner
 */
class m211130_023516_alter_column_banner extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('banners', 'description', $this->text()->null());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m211130_023516_alter_column_banner cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211130_023516_alter_column_banner cannot be reverted.\n";

        return false;
    }
    */
}
