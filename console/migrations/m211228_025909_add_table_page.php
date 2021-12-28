<?php

use yii\db\Migration;

/**
 * Class m211228_025909_add_table_page
 */
class m211228_025909_add_table_page extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%pages}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->null(),
            'slug' => $this->string(255)->null(),
            'description' => $this->string(255)->null(),
            'media_id' => $this->integer()->null(),
            'content' => $this->text()->null(),
            'active' => $this->tinyInteger()->defaultValue(0),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer()
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m211228_025909_add_table_page cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211228_025909_add_table_page cannot be reverted.\n";

        return false;
    }
    */
}
