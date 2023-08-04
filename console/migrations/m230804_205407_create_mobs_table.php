<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%mobs}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%waves}}`
 * - `{{%user}}`
 * - `{{%user}}`
 */
class m230804_205407_create_mobs_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%mobs}}', [
            'id' => $this->integer(11)->primaryKey(),
            'wave_id' => $this->string(36),
            'order' => $this->integer(10),
            'name' => $this->string(255),
            'attack' => $this->integer(10),
            'defense' => $this->integer(10),
            'hp' => $this->integer(10),
            'sp_attack' => $this->integer(10),
            'sp_defense' => $this->integer(10),
            'speed' => $this->integer(10),
            'available' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->integer(11),
            'updated_at' => $this->integer(11),
            'created_by' => $this->string(36),
            'updated_by' => $this->string(36),
        ]);

        // creates index for column `wave_id`
        $this->createIndex(
            '{{%idx-mobs-wave_id}}',
            '{{%mobs}}',
            'wave_id'
        );

        // add foreign key for table `{{%waves}}`
        $this->addForeignKey(
            '{{%fk-mobs-wave_id}}',
            '{{%mobs}}',
            'wave_id',
            '{{%waves}}',
            'id',
            'CASCADE'
        );

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-mobs-created_by}}',
            '{{%mobs}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-mobs-created_by}}',
            '{{%mobs}}',
            'created_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `updated_by`
        $this->createIndex(
            '{{%idx-mobs-updated_by}}',
            '{{%mobs}}',
            'updated_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-mobs-updated_by}}',
            '{{%mobs}}',
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
        // drops foreign key for table `{{%waves}}`
        $this->dropForeignKey(
            '{{%fk-mobs-wave_id}}',
            '{{%mobs}}'
        );

        // drops index for column `wave_id`
        $this->dropIndex(
            '{{%idx-mobs-wave_id}}',
            '{{%mobs}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-mobs-created_by}}',
            '{{%mobs}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-mobs-created_by}}',
            '{{%mobs}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-mobs-updated_by}}',
            '{{%mobs}}'
        );

        // drops index for column `updated_by`
        $this->dropIndex(
            '{{%idx-mobs-updated_by}}',
            '{{%mobs}}'
        );

        $this->dropTable('{{%mobs}}');
    }
}
