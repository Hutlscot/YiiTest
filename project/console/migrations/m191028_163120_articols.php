<?php

use yii\db\Migration;

/**
 * Class m191028_163120_articols
 */
class m191028_163120_articols extends Migration
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
        $this->createTable('articols', [
            'id' => $this->primaryKey()->unique()->notNull(),
            'title' => $this->string()->notNull(),
            'text' => $this->string()->notNull(),
            'author_id' => $this->integer()->notNull(),
            'alias' => $this->string(),
            'hint' => $this->integer(),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%user}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191028_163120_articols cannot be reverted.\n";

        return false;
    }
    */
}
