<?php

use yii\db\Migration;

/**
 * Class m171127_112210_tests
 */
class m171127_112210_tests extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $tableOptions = null;
        //Опции для mysql
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        //Создание таблицы IP пользователей
        $this->createTable('{{%tests}}', [
            'id' => $this->primaryKey(),
            'ip' => $this->string(15)->notNull(),
            'comment' => $this->string(255),
        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('{{%tests}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171127_112210_tests cannot be reverted.\n";

        return false;
    }
    */
}
