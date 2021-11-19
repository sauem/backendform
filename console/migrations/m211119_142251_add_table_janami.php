<?php

use yii\db\Migration;

/**
 * Class m211119_142251_add_table_janami
 */
class m211119_142251_add_table_janami extends Migration
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
        $this->addColumn('articles', 'show_cat', $this->tinyInteger()->defaultValue(1));

        $this->createTable('{{%technology}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->null(),
            'content' => $this->string(255)->null(),
            'avatar_id' => $this->string(255)->null(),
            'active' => $this->tinyInteger()->defaultValue(0),
            'type' => $this->string(50)->defaultValue('tech'),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer()
        ], $tableOptions);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m211119_142251_add_table_janami cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211119_142251_add_table_janami cannot be reverted.\n";

        return false;
    }
    */
}
