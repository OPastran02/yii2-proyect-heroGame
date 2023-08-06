<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%rarity}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 * - `{{%user}}`
 */
class m230805_133429_create_rarity_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';

        $this->createTable('{{%rarity}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'description' => $this->text(),
            'avatar' => $this->string(8),
            'available' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->integer(11),
            'updated_at' => $this->integer(11),
            'created_by' => $this->string(36),
            'updated_by' => $this->string(36),
        ], $tableOptions);

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-rarity-created_by}}',
            '{{%rarity}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-rarity-created_by}}',
            '{{%rarity}}',
            'created_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `updated_by`
        $this->createIndex(
            '{{%idx-rarity-updated_by}}',
            '{{%rarity}}',
            'updated_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-rarity-updated_by}}',
            '{{%rarity}}',
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
            '{{%fk-rarity-created_by}}',
            '{{%rarity}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-rarity-created_by}}',
            '{{%rarity}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-rarity-updated_by}}',
            '{{%rarity}}'
        );

        // drops index for column `updated_by`
        $this->dropIndex(
            '{{%idx-rarity-updated_by}}',
            '{{%rarity}}'
        );

        $this->dropTable('{{%rarity}}');
    }
}
