<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%stats}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%heroes}}`
 * - `{{%user}}`
 * - `{{%user}}`
 */
class m230804_125800_create_stats_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%stats}}', [
            'id' => $this->string(36)->primaryKey(),
            'attack' => $this->int(10)->notNull(),
            'defense' => $this->int(10)->notNull(),
            'hp' => $this->int(10)->notNull(),
            'sp_attack' => $this->int(10)->notNull(),
            'sp_defense' => $this->int(10)->notNull(),
            'speed' => $this->int(10)->notNull(),
            'farming' => $this->int(10)->notNull(),
            'steeling' => $this->int(10)->notNull(),
            'wooding' => $this->int(10)->notNull(),
            'attackBst' => $this->int(3)->notNull(),
            'defenseBst' => $this->int(3)->notNull(),
            'hpBst' => $this->int(3)->notNull(),
            'sp_attackBst' => $this->int(3)->notNull(),
            'sp_defenseBst' => $this->int(3)->notNull(),
            'speedBst' => $this->int(3)->notNull(),
            'farmingBst' => $this->int(3)->notNull(),
            'steelingBst' => $this->int(3)->notNull(),
            'woodingBst' => $this->int(3)->notNull(),
            'created_at' => $this->integer(11),
            'updated_at' => $this->integer(11),
            'created_by' => $this->string(36),
            'updated_by' => $this->string(36),
        ]);

        // creates index for column `id`
        $this->createIndex(
            '{{%idx-stats-id}}',
            '{{%stats}}',
            'id'
        );

        // add foreign key for table `{{%heroes}}`
        $this->addForeignKey(
            '{{%fk-stats-id}}',
            '{{%stats}}',
            'id',
            '{{%heroes}}',
            'id',
            'CASCADE'
        );

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-stats-created_by}}',
            '{{%stats}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-stats-created_by}}',
            '{{%stats}}',
            'created_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `updated_by`
        $this->createIndex(
            '{{%idx-stats-updated_by}}',
            '{{%stats}}',
            'updated_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-stats-updated_by}}',
            '{{%stats}}',
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
        // drops foreign key for table `{{%heroes}}`
        $this->dropForeignKey(
            '{{%fk-stats-id}}',
            '{{%stats}}'
        );

        // drops index for column `id`
        $this->dropIndex(
            '{{%idx-stats-id}}',
            '{{%stats}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-stats-created_by}}',
            '{{%stats}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-stats-created_by}}',
            '{{%stats}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-stats-updated_by}}',
            '{{%stats}}'
        );

        // drops index for column `updated_by`
        $this->dropIndex(
            '{{%idx-stats-updated_by}}',
            '{{%stats}}'
        );

        $this->dropTable('{{%stats}}');
    }
}
