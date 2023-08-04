<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%type}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 * - `{{%user}}`
 */
class m230804_133435_create_type_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%type}}', [
            'id' => $this->int(8)->primaryKey(),
            'name' => $this->string(255),
            'horoscope' => $this->string(15),
            'description' => $this->text(),
            'avatar' => $this->string(8),
            'available' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->integer(11),
            'updated_at' => $this->integer(11),
            'created_by' => $this->string(36),
            'updated_by' => $this->string(36),
        ]);

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-type-created_by}}',
            '{{%type}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-type-created_by}}',
            '{{%type}}',
            'created_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `updated_by`
        $this->createIndex(
            '{{%idx-type-updated_by}}',
            '{{%type}}',
            'updated_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-type-updated_by}}',
            '{{%type}}',
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
            '{{%fk-type-created_by}}',
            '{{%type}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-type-created_by}}',
            '{{%type}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-type-updated_by}}',
            '{{%type}}'
        );

        // drops index for column `updated_by`
        $this->dropIndex(
            '{{%idx-type-updated_by}}',
            '{{%type}}'
        );

        $this->dropTable('{{%type}}');
    }
}
