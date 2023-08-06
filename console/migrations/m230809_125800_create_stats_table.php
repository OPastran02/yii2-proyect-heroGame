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
class m230809_125800_create_stats_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';

        $this->createTable('{{%stats}}', [
            'id' => $this->string(36)->notNull()->append('PRIMARY KEY'),
            'attack' => $this->integer(10)->notNull(),
            'defense' => $this->integer(10)->notNull(),
            'hp' => $this->integer(10)->notNull(),
            'sp_attack' => $this->integer(10)->notNull(),
            'sp_defense' => $this->integer(10)->notNull(),
            'speed' => $this->integer(10)->notNull(),
            'farming' => $this->integer(10)->notNull(),
            'steeling' => $this->integer(10)->notNull(),
            'wooding' => $this->integer(10)->notNull(),
            'attackBst' => $this->integer(3)->notNull(),
            'defenseBst' => $this->integer(3)->notNull(),
            'hpBst' => $this->integer(3)->notNull(),
            'sp_attackBst' => $this->integer(3)->notNull(),
            'sp_defenseBst' => $this->integer(3)->notNull(),
            'speedBst' => $this->integer(3)->notNull(),
            'farmingBst' => $this->integer(3)->notNull(),
            'steelingBst' => $this->integer(3)->notNull(),
            'woodingBst' => $this->integer(3)->notNull(),
            'created_at' => $this->integer(11),
            'updated_at' => $this->integer(11),
            'created_by' => $this->string(36),
            'updated_by' => $this->string(36),
        ], $tableOptions);

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
