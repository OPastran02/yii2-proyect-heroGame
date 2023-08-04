<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%availableHeroes}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 * - `{{%user}}`
 */
class m230804_221128_create_availableHeroes_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%availableHeroes}}', [
            'id' => $this->string(36)->primaryKey(),
            'name' => $this->string(255),
            'description' => $this->text(),
            'world' => $this->text(),
            'avatar' => $this->string(8),
            'avatarBlock' => $this->string(8),
            'race_id' => $this->int(2),
            'rarity_id' => $this->int(2),
            'nature_id' => $this->int(2),
            'type_id' => $this->int(2),
            'attack_min' => $this->int(10)->notNull(),
            'attack_max' => $this->int(10)->notNull(),
            'b_attack_min' => $this->int(10)->notNull(),
            'b_Battack_max' => $this->int(10)->notNull(),
            'defense_min' => $this->int(10)->notNull(),
            'defense_max' => $this->int(10)->notNull(),
            'b_defense_min' => $this->int(10)->notNull(),
            'b_defense_max' => $this->int(10)->notNull(),
            'hp_min' => $this->int(10)->notNull(),
            'hp_max' => $this->int(10)->notNull(),
            'b_hp_min' => $this->int(10)->notNull(),
            'b_hp_max' => $this->int(10)->notNull(),
            'sp_attack_min' => $this->int(10)->notNull(),
            'sp_attack_max' => $this->int(10)->notNull(),
            'b_sp_attack_min' => $this->int(10)->notNull(),
            'b_sp_attack_max' => $this->int(10)->notNull(),
            'sp_defense_min' => $this->int(10)->notNull(),
            'sp_defense_max' => $this->int(10)->notNull(),
            'b_sp_defense_min' => $this->int(10)->notNull(),
            'b_sp_defense_max' => $this->int(10)->notNull(),
            'speed_min' => $this->int(10)->notNull(),
            'speed_max' => $this->int(10)->notNull(),
            'b_speed_min' => $this->int(10)->notNull(),
            'b_speed_max' => $this->int(10)->notNull(),
            'farming_min' => $this->int(10)->notNull(),
            'farming_max' => $this->int(10)->notNull(),
            'b_farming_min' => $this->int(10)->notNull(),
            'b_farming_max' => $this->int(10)->notNull(),
            'steeling_min' => $this->int(10)->notNull(),
            'steeling_max' => $this->int(10)->notNull(),
            'b_steeling_min' => $this->int(10)->notNull(),
            'b_steeling_max' => $this->int(10)->notNull(),
            'wooding_min' => $this->int(10)->notNull(),
            'wooding_max' => $this->int(10)->notNull(),
            'b_wooding_min' => $this->int(10)->notNull(),
            'b_wooding_max' => $this->int(10)->notNull(),
            'available' => $this->int(10)->notNull(),
            'created_at' => $this->integer(11),
            'updated_at' => $this->integer(11),
            'created_by' => $this->string(36),
            'updated_by' => $this->string(36),
        ]);

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-availableHeroes-created_by}}',
            '{{%availableHeroes}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-availableHeroes-created_by}}',
            '{{%availableHeroes}}',
            'created_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `updated_by`
        $this->createIndex(
            '{{%idx-availableHeroes-updated_by}}',
            '{{%availableHeroes}}',
            'updated_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-availableHeroes-updated_by}}',
            '{{%availableHeroes}}',
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
            '{{%fk-availableHeroes-created_by}}',
            '{{%availableHeroes}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-availableHeroes-created_by}}',
            '{{%availableHeroes}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-availableHeroes-updated_by}}',
            '{{%availableHeroes}}'
        );

        // drops index for column `updated_by`
        $this->dropIndex(
            '{{%idx-availableHeroes-updated_by}}',
            '{{%availableHeroes}}'
        );

        $this->dropTable('{{%availableHeroes}}');
    }
}
