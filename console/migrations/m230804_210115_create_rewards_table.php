<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%rewards}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%worlds}}`
 * - `{{%worlds}}`
 * - `{{%user}}`
 * - `{{%user}}`
 */
class m230804_210115_create_rewards_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%rewards}}', [
            'id' => $this->primaryKey(),
            'worlds_id' => $this->integer(11),
            'item_id' => $this->integer(11),
            'quantity' => $this->integer(10),
            'available' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->integer(11),
            'updated_at' => $this->integer(11),
            'created_by' => $this->string(36),
            'updated_by' => $this->string(36),
        ]);

        // creates index for column `worlds_id`
        $this->createIndex(
            '{{%idx-rewards-worlds_id}}',
            '{{%rewards}}',
            'worlds_id'
        );

        // add foreign key for table `{{%worlds}}`
        $this->addForeignKey(
            '{{%fk-rewards-worlds_id}}',
            '{{%rewards}}',
            'worlds_id',
            '{{%worlds}}',
            'id',
            'CASCADE'
        );

        // creates index for column `item_id`
        $this->createIndex(
            '{{%idx-rewards-item_id}}',
            '{{%rewards}}',
            'item_id'
        );

        // add foreign key for table `{{%worlds}}`
        $this->addForeignKey(
            '{{%fk-rewards-item_id}}',
            '{{%rewards}}',
            'item_id',
            '{{%worlds}}',
            'id',
            'CASCADE'
        );

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-rewards-created_by}}',
            '{{%rewards}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-rewards-created_by}}',
            '{{%rewards}}',
            'created_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `updated_by`
        $this->createIndex(
            '{{%idx-rewards-updated_by}}',
            '{{%rewards}}',
            'updated_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-rewards-updated_by}}',
            '{{%rewards}}',
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
            '{{%fk-rewards-worlds_id}}',
            '{{%rewards}}'
        );

        // drops index for column `worlds_id`
        $this->dropIndex(
            '{{%idx-rewards-worlds_id}}',
            '{{%rewards}}'
        );

        // drops foreign key for table `{{%worlds}}`
        $this->dropForeignKey(
            '{{%fk-rewards-item_id}}',
            '{{%rewards}}'
        );

        // drops index for column `item_id`
        $this->dropIndex(
            '{{%idx-rewards-item_id}}',
            '{{%rewards}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-rewards-created_by}}',
            '{{%rewards}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-rewards-created_by}}',
            '{{%rewards}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-rewards-updated_by}}',
            '{{%rewards}}'
        );

        // drops index for column `updated_by`
        $this->dropIndex(
            '{{%idx-rewards-updated_by}}',
            '{{%rewards}}'
        );

        $this->dropTable('{{%rewards}}');
    }
}
