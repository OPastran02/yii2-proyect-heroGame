<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%guilds_players}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%guilds}}`
 * - `{{%player}}`
 * - `{{%user}}`
 * - `{{%user}}`
 */
class m230816_202316_create_guilds_players_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';

        $this->createTable('{{%guilds_players}}', [
            'id' => $this->primaryKey(),
            'guild_id' => $this->integer(11),
            'player_id' => $this->string(36),
            'title' => $this->string(255),
            'wood' => $this->integer(10),
            'steel' => $this->integer(10),
            'food' => $this->integer(10),
            'gold' => $this->integer(10),
            'available' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->integer(11),
            'updated_at' => $this->integer(11),
            'created_by' => $this->string(36),
            'updated_by' => $this->string(36),
        ], $tableOptions);

        // creates index for column `guild_id`
        $this->createIndex(
            '{{%idx-guilds_players-guild_id}}',
            '{{%guilds_players}}',
            'guild_id'
        );

        // add foreign key for table `{{%guilds}}`
        $this->addForeignKey(
            '{{%fk-guilds_players-guild_id}}',
            '{{%guilds_players}}',
            'guild_id',
            '{{%guilds}}',
            'id',
            'CASCADE'
        );

        // creates index for column `player_id`
        $this->createIndex(
            '{{%idx-guilds_players-player_id}}',
            '{{%guilds_players}}',
            'player_id'
        );

        // add foreign key for table `{{%players}}`
        $this->addForeignKey(
            '{{%fk-guilds_players-player_id}}',
            '{{%guilds_players}}',
            'player_id',
            '{{%players}}',
            'id',
            'CASCADE'
        );

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-guilds_players-created_by}}',
            '{{%guilds_players}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-guilds_players-created_by}}',
            '{{%guilds_players}}',
            'created_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `updated_by`
        $this->createIndex(
            '{{%idx-guilds_players-updated_by}}',
            '{{%guilds_players}}',
            'updated_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-guilds_players-updated_by}}',
            '{{%guilds_players}}',
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
        // drops foreign key for table `{{%guilds}}`
        $this->dropForeignKey(
            '{{%fk-guilds_players-guild_id}}',
            '{{%guilds_players}}'
        );

        // drops index for column `guild_id`
        $this->dropIndex(
            '{{%idx-guilds_players-guild_id}}',
            '{{%guilds_players}}'
        );

        // drops foreign key for table `{{%players}}`
        $this->dropForeignKey(
            '{{%fk-guilds_players-player_id}}',
            '{{%guilds_players}}'
        );

        // drops index for column `player_id`
        $this->dropIndex(
            '{{%idx-guilds_players-player_id}}',
            '{{%guilds_players}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-guilds_players-created_by}}',
            '{{%guilds_players}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-guilds_players-created_by}}',
            '{{%guilds_players}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-guilds_players-updated_by}}',
            '{{%guilds_players}}'
        );

        // drops index for column `updated_by`
        $this->dropIndex(
            '{{%idx-guilds_players-updated_by}}',
            '{{%guilds_players}}'
        );

        $this->dropTable('{{%guilds_players}}');
    }
}
