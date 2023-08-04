<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%heroes}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%player}}`
 * - `{{%rarity}}`
 * - `{{%nature}}`
 * - `{{%type}}`
 * - `{{%stats}}`
 * - `{{%race}}`
 * - `{{%accesories}}`
 * - `{{%accesories}}`
 * - `{{%accesories}}`
 * - `{{%user}}`
 * - `{{%user}}`
 */
class m230804_144859_create_heroes_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%heroes}}', [
            'id' => $this->string(36)->primaryKey(),
            'player_id' => $this->string(36),
            'name' => $this->string(255),
            'description' => $this->text(),
            'rarity_id' => $this->integer(8),
            'nature_id' => $this->integer(8),
            'type_id' => $this->integer(8),
            'stats_id' => $this->integer(36),
            'race_id' => $this->integer(36),
            'experience' => $this->integer(11),
            'level' => $this->integer(11),
            'placement_id' => $this->integer(11),
            'isInQueue' => $this->boolean(),
            'orderInGeneralTeam' => $this->integer(1),
            'orderInRaceTeam' => $this->integer(1),
            'avatar' => $this->string(8),
            'accesories_id' => $this->integer(11),
            'accesories_id1' => $this->integer(11),
            'accesories_id2' => $this->integer(11),
            'available' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->integer(11),
            'updated_at' => $this->integer(11),
            'created_by' => $this->string(36),
            'updated_by' => $this->string(36),
        ]);

        // creates index for column `player_id`
        $this->createIndex(
            '{{%idx-heroes-player_id}}',
            '{{%heroes}}',
            'player_id'
        );

        // add foreign key for table `{{%player}}`
        $this->addForeignKey(
            '{{%fk-heroes-player_id}}',
            '{{%heroes}}',
            'player_id',
            '{{%player}}',
            'id',
            'CASCADE'
        );

        // creates index for column `rarity_id`
        $this->createIndex(
            '{{%idx-heroes-rarity_id}}',
            '{{%heroes}}',
            'rarity_id'
        );

        // add foreign key for table `{{%rarity}}`
        $this->addForeignKey(
            '{{%fk-heroes-rarity_id}}',
            '{{%heroes}}',
            'rarity_id',
            '{{%rarity}}',
            'id',
            'CASCADE'
        );

        // creates index for column `nature_id`
        $this->createIndex(
            '{{%idx-heroes-nature_id}}',
            '{{%heroes}}',
            'nature_id'
        );

        // add foreign key for table `{{%nature}}`
        $this->addForeignKey(
            '{{%fk-heroes-nature_id}}',
            '{{%heroes}}',
            'nature_id',
            '{{%nature}}',
            'id',
            'CASCADE'
        );

        // creates index for column `type_id`
        $this->createIndex(
            '{{%idx-heroes-type_id}}',
            '{{%heroes}}',
            'type_id'
        );

        // add foreign key for table `{{%type}}`
        $this->addForeignKey(
            '{{%fk-heroes-type_id}}',
            '{{%heroes}}',
            'type_id',
            '{{%type}}',
            'id',
            'CASCADE'
        );

        // creates index for column `stats_id`
        $this->createIndex(
            '{{%idx-heroes-stats_id}}',
            '{{%heroes}}',
            'stats_id'
        );

        // add foreign key for table `{{%stats}}`
        $this->addForeignKey(
            '{{%fk-heroes-stats_id}}',
            '{{%heroes}}',
            'stats_id',
            '{{%stats}}',
            'id',
            'CASCADE'
        );

        // creates index for column `race_id`
        $this->createIndex(
            '{{%idx-heroes-race_id}}',
            '{{%heroes}}',
            'race_id'
        );

        // add foreign key for table `{{%race}}`
        $this->addForeignKey(
            '{{%fk-heroes-race_id}}',
            '{{%heroes}}',
            'race_id',
            '{{%race}}',
            'id',
            'CASCADE'
        );

        // creates index for column `accesories_id`
        $this->createIndex(
            '{{%idx-heroes-accesories_id}}',
            '{{%heroes}}',
            'accesories_id'
        );

        // add foreign key for table `{{%accesories}}`
        $this->addForeignKey(
            '{{%fk-heroes-accesories_id}}',
            '{{%heroes}}',
            'accesories_id',
            '{{%accesories}}',
            'id',
            'CASCADE'
        );

        // creates index for column `accesories_id1`
        $this->createIndex(
            '{{%idx-heroes-accesories_id1}}',
            '{{%heroes}}',
            'accesories_id1'
        );

        // add foreign key for table `{{%accesories}}`
        $this->addForeignKey(
            '{{%fk-heroes-accesories_id1}}',
            '{{%heroes}}',
            'accesories_id1',
            '{{%accesories}}',
            'id',
            'CASCADE'
        );

        // creates index for column `accesories_id2`
        $this->createIndex(
            '{{%idx-heroes-accesories_id2}}',
            '{{%heroes}}',
            'accesories_id2'
        );

        // add foreign key for table `{{%accesories}}`
        $this->addForeignKey(
            '{{%fk-heroes-accesories_id2}}',
            '{{%heroes}}',
            'accesories_id2',
            '{{%accesories}}',
            'id',
            'CASCADE'
        );

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-heroes-created_by}}',
            '{{%heroes}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-heroes-created_by}}',
            '{{%heroes}}',
            'created_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `updated_by`
        $this->createIndex(
            '{{%idx-heroes-updated_by}}',
            '{{%heroes}}',
            'updated_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-heroes-updated_by}}',
            '{{%heroes}}',
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
        // drops foreign key for table `{{%player}}`
        $this->dropForeignKey(
            '{{%fk-heroes-player_id}}',
            '{{%heroes}}'
        );

        // drops index for column `player_id`
        $this->dropIndex(
            '{{%idx-heroes-player_id}}',
            '{{%heroes}}'
        );

        // drops foreign key for table `{{%rarity}}`
        $this->dropForeignKey(
            '{{%fk-heroes-rarity_id}}',
            '{{%heroes}}'
        );

        // drops index for column `rarity_id`
        $this->dropIndex(
            '{{%idx-heroes-rarity_id}}',
            '{{%heroes}}'
        );

        // drops foreign key for table `{{%nature}}`
        $this->dropForeignKey(
            '{{%fk-heroes-nature_id}}',
            '{{%heroes}}'
        );

        // drops index for column `nature_id`
        $this->dropIndex(
            '{{%idx-heroes-nature_id}}',
            '{{%heroes}}'
        );

        // drops foreign key for table `{{%type}}`
        $this->dropForeignKey(
            '{{%fk-heroes-type_id}}',
            '{{%heroes}}'
        );

        // drops index for column `type_id`
        $this->dropIndex(
            '{{%idx-heroes-type_id}}',
            '{{%heroes}}'
        );

        // drops foreign key for table `{{%stats}}`
        $this->dropForeignKey(
            '{{%fk-heroes-stats_id}}',
            '{{%heroes}}'
        );

        // drops index for column `stats_id`
        $this->dropIndex(
            '{{%idx-heroes-stats_id}}',
            '{{%heroes}}'
        );

        // drops foreign key for table `{{%race}}`
        $this->dropForeignKey(
            '{{%fk-heroes-race_id}}',
            '{{%heroes}}'
        );

        // drops index for column `race_id`
        $this->dropIndex(
            '{{%idx-heroes-race_id}}',
            '{{%heroes}}'
        );

        // drops foreign key for table `{{%accesories}}`
        $this->dropForeignKey(
            '{{%fk-heroes-accesories_id}}',
            '{{%heroes}}'
        );

        // drops index for column `accesories_id`
        $this->dropIndex(
            '{{%idx-heroes-accesories_id}}',
            '{{%heroes}}'
        );

        // drops foreign key for table `{{%accesories}}`
        $this->dropForeignKey(
            '{{%fk-heroes-accesories_id1}}',
            '{{%heroes}}'
        );

        // drops index for column `accesories_id1`
        $this->dropIndex(
            '{{%idx-heroes-accesories_id1}}',
            '{{%heroes}}'
        );

        // drops foreign key for table `{{%accesories}}`
        $this->dropForeignKey(
            '{{%fk-heroes-accesories_id2}}',
            '{{%heroes}}'
        );

        // drops index for column `accesories_id2`
        $this->dropIndex(
            '{{%idx-heroes-accesories_id2}}',
            '{{%heroes}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-heroes-created_by}}',
            '{{%heroes}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-heroes-created_by}}',
            '{{%heroes}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-heroes-updated_by}}',
            '{{%heroes}}'
        );

        // drops index for column `updated_by`
        $this->dropIndex(
            '{{%idx-heroes-updated_by}}',
            '{{%heroes}}'
        );

        $this->dropTable('{{%heroes}}');
    }
}
