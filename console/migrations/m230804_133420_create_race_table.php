<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%race}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 * - `{{%user}}`
 */
class m230804_133420_create_race_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%race}}', [
            'id' => $this->int(8)->primaryKey(),
            'name' => $this->string(255),
            'description' => $this->text(),
            'available' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->integer(11),
            'updated_at' => $this->integer(11),
            'created_by' => $this->string(36),
            'updated_by' => $this->string(36),
        ]);

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-race-created_by}}',
            '{{%race}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-race-created_by}}',
            '{{%race}}',
            'created_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `updated_by`
        $this->createIndex(
            '{{%idx-race-updated_by}}',
            '{{%race}}',
            'updated_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-race-updated_by}}',
            '{{%race}}',
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
            '{{%fk-race-created_by}}',
            '{{%race}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-race-created_by}}',
            '{{%race}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-race-updated_by}}',
            '{{%race}}'
        );

        // drops index for column `updated_by`
        $this->dropIndex(
            '{{%idx-race-updated_by}}',
            '{{%race}}'
        );

        $this->dropTable('{{%race}}');
    }
}
