<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%guilds}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%castle}}`
 * - `{{%user}}`
 * - `{{%user}}`
 */
class m230815_151228_create_guilds_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';

        $this->createTable('{{%guilds}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'description' => $this->text(),
            'experience' => $this->integer(20),
            'level' => $this->integer(5),
            'wood' => $this->integer(10),
            'steel' => $this->integer(10),
            'food' => $this->integer(10),
            'gold' => $this->integer(10),
            'castle_id' => $this->string(36),
            'quantity' => $this->integer(4),
            'avatar' => $this->string(8),
            'available' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->integer(11),
            'updated_at' => $this->integer(11),
            'created_by' => $this->string(36),
            'updated_by' => $this->string(36),
        ], $tableOptions);


        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-guilds-created_by}}',
            '{{%guilds}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-guilds-created_by}}',
            '{{%guilds}}',
            'created_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `updated_by`
        $this->createIndex(
            '{{%idx-guilds-updated_by}}',
            '{{%guilds}}',
            'updated_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-guilds-updated_by}}',
            '{{%guilds}}',
            'updated_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-guilds-created_by}}',
            '{{%guilds}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-guilds-created_by}}',
            '{{%guilds}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-guilds-updated_by}}',
            '{{%guilds}}'
        );

        // drops index for column `updated_by`
        $this->dropIndex(
            '{{%idx-guilds-updated_by}}',
            '{{%guilds}}'
        );

        $this->dropTable('{{%guilds}}');
    }
}
