<?php

use yii\db\Migration;

/**
 * Class m200822_062712_create_table_user
 */
class m200822_062712_create_table_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
            /*$this->createTable('user', [
                'id' => $this->primaryKey(),
                'username' => $this->string(255),
                'aut_key' => $this->string(255),
                'password_hash' => $this->string(255),
                'password_reset_token' => $this->string(255),
                'email' => $this->string(255),
                'status' => $this->integer(1),
                'created_at' => $this->timestamp().' NOT NULL DEFAULT CURRENT_DATE()',
            ]);*/
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        //$this->dropTable('user');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200822_062712_create_table_user cannot be reverted.\n";

        return false;
    }
    */
}
