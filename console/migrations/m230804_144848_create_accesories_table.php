<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%accesories}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%rarity}}`
 * - `{{%user}}`
 * - `{{%user}}`
 */
class m230804_144848_create_accesories_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%accesories}}', [
            'id' => $this->integer(11)->primaryKey(),
            'name' => $this->string(255),
            'description' => $this->text(),
            'rarity_id' => $this->integer(8),
            'orderInGeneralTeam' => $this->integer(1),
            'boost_attack' => $this->integer(8),
            'boost_defense' => $this->integer(8),
            'boost_hp' => $this->integer(8),
            'boost_sp_attack' => $this->integer(8),
            'boost_sp_defense' => $this->integer(8),
            'boost_speedinteger(8)',
            'boost_farming' => $this->integer(8),
            'boost_steeling' => $this->integer(8),
            'boost_wooding' => $this->integer(8),
            'power_points' => $this->integer(8),
            'avatar' => $this->string(8),
            'created_at' => $this->integer(11),
            'updated_at' => $this->integer(11),
            'created_by' => $this->string(36),
            'updated_by' => $this->string(36),
        ]);

        // creates index for column `rarity_id`
        $this->createIndex(
            '{{%idx-accesories-rarity_id}}',
            '{{%accesories}}',
            'rarity_id'
        );

        // add foreign key for table `{{%rarity}}`
        $this->addForeignKey(
            '{{%fk-accesories-rarity_id}}',
            '{{%accesories}}',
            'rarity_id',
            '{{%rarity}}',
            'id',
            'CASCADE'
        );

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-accesories-created_by}}',
            '{{%accesories}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-accesories-created_by}}',
            '{{%accesories}}',
            'created_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `updated_by`
        $this->createIndex(
            '{{%idx-accesories-updated_by}}',
            '{{%accesories}}',
            'updated_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-accesories-updated_by}}',
            '{{%accesories}}',
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
        // drops foreign key for table `{{%rarity}}`
        $this->dropForeignKey(
            '{{%fk-accesories-rarity_id}}',
            '{{%accesories}}'
        );

        // drops index for column `rarity_id`
        $this->dropIndex(
            '{{%idx-accesories-rarity_id}}',
            '{{%accesories}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-accesories-created_by}}',
            '{{%accesories}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-accesories-created_by}}',
            '{{%accesories}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-accesories-updated_by}}',
            '{{%accesories}}'
        );

        // drops index for column `updated_by`
        $this->dropIndex(
            '{{%idx-accesories-updated_by}}',
            '{{%accesories}}'
        );

        $this->dropTable('{{%accesories}}');
    }
}
