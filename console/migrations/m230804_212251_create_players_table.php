<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%players}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 * - `{{%user}}`
 * - `{{%user}}`
 */
class m230804_212251_create_players_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%players}}', [
            'id' => $this->string(36)->primaryKey()(),
            'phrase' => $this->string(255),
            'title' => $this->string(255),
            'coins' => $this->integer(10),
            'diamonds' => $this->integer(10),
            'crystals' => $this->integer(10),
            'experience' => $this->integer(10),
            'level' => $this->integer(10),
            'loginDays' => $this->integer(10),
            'avatar' => $this->string(10),
            'isActive' => $this->integer(1),
            'lastLogin' => $this->integer(11),
            'playerType' => $this->integer(1),
            'adsViewed' => $this->integer(2),
            'available' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->integer(11),
            'updated_at' => $this->integer(11),
            'created_by' => $this->string(36),
            'updated_by' => $this->string(36),
        ]);

        // creates index for column `id`
        $this->createIndex(
            '{{%idx-players-id}}',
            '{{%players}}',
            'id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-players-id}}',
            '{{%players}}',
            'id',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-players-created_by}}',
            '{{%players}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-players-created_by}}',
            '{{%players}}',
            'created_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `updated_by`
        $this->createIndex(
            '{{%idx-players-updated_by}}',
            '{{%players}}',
            'updated_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-players-updated_by}}',
            '{{%players}}',
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
            '{{%fk-players-id}}',
            '{{%players}}'
        );

        // drops index for column `id`
        $this->dropIndex(
            '{{%idx-players-id}}',
            '{{%players}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-players-created_by}}',
            '{{%players}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-players-created_by}}',
            '{{%players}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-players-updated_by}}',
            '{{%players}}'
        );

        // drops index for column `updated_by`
        $this->dropIndex(
            '{{%idx-players-updated_by}}',
            '{{%players}}'
        );

        $this->dropTable('{{%players}}');
    }
}
