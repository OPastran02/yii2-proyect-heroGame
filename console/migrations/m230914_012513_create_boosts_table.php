<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%boosts}}`.
 */
class m230914_012513_create_boosts_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $table = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';

        $this->createTable('{{%boosts}}', [
            'id' => $this->primaryKey()->notNull()->unique(),
            'attack' => $this->integer()->notNull()->defaultValue(0),
            'defense' => $this->integer()->notNull()->defaultValue(0),
            'towerAttack' => $this->integer()->notNull()->defaultValue(0),
            'towerDefense' => $this->integer()->notNull()->defaultValue(0),
            'hp' => $this->integer()->notNull()->defaultValue(0),
            'accuracy' => $this->integer()->notNull()->defaultValue(0),
            'speed' => $this->integer()->notNull()->defaultValue(0),
            'farming' => $this->integer()->notNull()->defaultValue(0),
            'steeling' => $this->integer()->notNull()->defaultValue(0),
            'wooding' => $this->integer()->notNull()->defaultValue(0),
            'available' => $this->integer(1)->notNull()->defaultValue(1),
            'createdAt' => $this->timestamp(),
            'updatedAt' => $this->timestamp(),
            'createdBy' => $this->string(36),
            'updatedBy' => $this->string(36),
        ],$table );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%boosts}}');
    }
}
