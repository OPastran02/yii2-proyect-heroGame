<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%worlds}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%race}}`
 * - `{{%user}}`
 * - `{{%user}}`
 */
class m230804_210129_create_worlds_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%worlds}}', [
            'id' => $this->integer(11)->primaryKey(),
            'race_id' => $this->string(36),
            'chapter' => $this->integer(10),
            'description' => $this->text(),
            'avatar' => $this->string(8),
            'created_at' => $this->integer(11),
            'updated_at' => $this->integer(11),
            'created_by' => $this->string(36),
            'updated_by' => $this->string(36),
        ]);

        // creates index for column `race_id`
        $this->createIndex(
            '{{%idx-worlds-race_id}}',
            '{{%worlds}}',
            'race_id'
        );

        // add foreign key for table `{{%race}}`
        $this->addForeignKey(
            '{{%fk-worlds-race_id}}',
            '{{%worlds}}',
            'race_id',
            '{{%race}}',
            'id',
            'CASCADE'
        );

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-worlds-created_by}}',
            '{{%worlds}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-worlds-created_by}}',
            '{{%worlds}}',
            'created_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `updated_by`
        $this->createIndex(
            '{{%idx-worlds-updated_by}}',
            '{{%worlds}}',
            'updated_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-worlds-updated_by}}',
            '{{%worlds}}',
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
        // drops foreign key for table `{{%race}}`
        $this->dropForeignKey(
            '{{%fk-worlds-race_id}}',
            '{{%worlds}}'
        );

        // drops index for column `race_id`
        $this->dropIndex(
            '{{%idx-worlds-race_id}}',
            '{{%worlds}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-worlds-created_by}}',
            '{{%worlds}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-worlds-created_by}}',
            '{{%worlds}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-worlds-updated_by}}',
            '{{%worlds}}'
        );

        // drops index for column `updated_by`
        $this->dropIndex(
            '{{%idx-worlds-updated_by}}',
            '{{%worlds}}'
        );

        $this->dropTable('{{%worlds}}');
    }
}
