<?php

use yii\db\Migration;

/**
 * Class m210429_035433_memmber_table
 */
class m210429_035433_memmber_table extends Migration
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
        //HELLO
        $this->createTable('member', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'description' => $this->string(255)->null(),
            'facebook' => $this->string(255)->null(),
            'media_id' => $this->integer()->null(),
            'twitter' => $this->string(255)->null(),
            'instagram' => $this->string(255)->null(),
            'youtube' => $this->string(255)->null(),
            'linkedin' => $this->string(255)->null(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210429_035433_memmber_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210429_035433_memmber_table cannot be reverted.\n";

        return false;
    }
    */
}
