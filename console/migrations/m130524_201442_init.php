<?php

use yii\db\Migration;

class m130524_201442_init extends Migration
{
    public function up()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';

        $this->createTable('{{%user}}', [
            'id' => $this->string(36)->notNull(), // Use string(36) for UUID field
            'username' => $this->string()->notNull()->unique(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string()->notNull()->unique(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'available' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

        // Add primary key constraint to the `id` column (as it's the primary key)
        $this->addPrimaryKey('pk-user-id', '{{%user}}', 'id');
    }

    public function down()
    {
        // Drop the primary key constraint
        $this->dropPrimaryKey('pk-user-id', '{{%user}}');

        $this->dropTable('{{%user}}');
    }
}
