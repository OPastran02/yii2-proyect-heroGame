<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%players_worlds}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%player}}`
 * - `{{%worlds}}`
 * - `{{%user}}`
 * - `{{%user}}`
 */
class m230804_210630_create_players_worlds_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%players_worlds}}', [
            'id' => $this->integer(11)->primaryKey(),
            'player_id' => $this->string(36),
            'worlds_id' => $this->integer(11),
            'avatar' => $this->string(8),
            'stars' => $this->integer(1),
            'available' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->integer(11),
            'updated_at' => $this->integer(11),
            'created_by' => $this->string(36),
            'updated_by' => $this->string(36),
        ]);

        // creates index for column `player_id`
        $this->createIndex(
            '{{%idx-players_worlds-player_id}}',
            '{{%players_worlds}}',
            'player_id'
        );

        // add foreign key for table `{{%player}}`
        $this->addForeignKey(
            '{{%fk-players_worlds-player_id}}',
            '{{%players_worlds}}',
            'player_id',
            '{{%player}}',
            'id',
            'CASCADE'
        );

        // creates index for column `worlds_id`
        $this->createIndex(
            '{{%idx-players_worlds-worlds_id}}',
            '{{%players_worlds}}',
            'worlds_id'
        );

        // add foreign key for table `{{%worlds}}`
        $this->addForeignKey(
            '{{%fk-players_worlds-worlds_id}}',
            '{{%players_worlds}}',
            'worlds_id',
            '{{%worlds}}',
            'id',
            'CASCADE'
        );

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-players_worlds-created_by}}',
            '{{%players_worlds}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-players_worlds-created_by}}',
            '{{%players_worlds}}',
            'created_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `updated_by`
        $this->createIndex(
            '{{%idx-players_worlds-updated_by}}',
            '{{%players_worlds}}',
            'updated_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-players_worlds-updated_by}}',
            '{{%players_worlds}}',
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
            '{{%fk-players_worlds-player_id}}',
            '{{%players_worlds}}'
        );

        // drops index for column `player_id`
        $this->dropIndex(
            '{{%idx-players_worlds-player_id}}',
            '{{%players_worlds}}'
        );

        // drops foreign key for table `{{%worlds}}`
        $this->dropForeignKey(
            '{{%fk-players_worlds-worlds_id}}',
            '{{%players_worlds}}'
        );

        // drops index for column `worlds_id`
        $this->dropIndex(
            '{{%idx-players_worlds-worlds_id}}',
            '{{%players_worlds}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-players_worlds-created_by}}',
            '{{%players_worlds}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-players_worlds-created_by}}',
            '{{%players_worlds}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-players_worlds-updated_by}}',
            '{{%players_worlds}}'
        );

        // drops index for column `updated_by`
        $this->dropIndex(
            '{{%idx-players_worlds-updated_by}}',
            '{{%players_worlds}}'
        );

        $this->dropTable('{{%players_worlds}}');
    }
}
