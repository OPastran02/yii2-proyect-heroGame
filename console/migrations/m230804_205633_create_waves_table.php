<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%waves}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%worlds}}`
 * - `{{%user}}`
 * - `{{%user}}`
 */
class m230804_205633_create_waves_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%waves}}', [
            'id' => $this->integer(11)->primaryKey(),
            'mundo_id' => $this->integer(11),
            'wave' => $this->integer(10),
            'created_by' => $this->string(36),
            'updated_by' => $this->string(36),
        ]);

        // creates index for column `mundo_id`
        $this->createIndex(
            '{{%idx-waves-mundo_id}}',
            '{{%waves}}',
            'mundo_id'
        );

        // add foreign key for table `{{%worlds}}`
        $this->addForeignKey(
            '{{%fk-waves-mundo_id}}',
            '{{%waves}}',
            'mundo_id',
            '{{%worlds}}',
            'id',
            'CASCADE'
        );

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-waves-created_by}}',
            '{{%waves}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-waves-created_by}}',
            '{{%waves}}',
            'created_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `updated_by`
        $this->createIndex(
            '{{%idx-waves-updated_by}}',
            '{{%waves}}',
            'updated_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-waves-updated_by}}',
            '{{%waves}}',
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
        // drops foreign key for table `{{%worlds}}`
        $this->dropForeignKey(
            '{{%fk-waves-mundo_id}}',
            '{{%waves}}'
        );

        // drops index for column `mundo_id`
        $this->dropIndex(
            '{{%idx-waves-mundo_id}}',
            '{{%waves}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-waves-created_by}}',
            '{{%waves}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-waves-created_by}}',
            '{{%waves}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-waves-updated_by}}',
            '{{%waves}}'
        );

        // drops index for column `updated_by`
        $this->dropIndex(
            '{{%idx-waves-updated_by}}',
            '{{%waves}}'
        );

        $this->dropTable('{{%waves}}');
    }
}
