<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%nature}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 * - `{{%user}}`
 */
class m230804_134143_create_nature_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%nature}}', [
            'id' => $this->int(8)->primaryKey(),
            'name' => $this->string(255),
            'description' => $this->text(),
            'boost_attack' => $this->integer(15),
            'boost_defense' => $this->integer(15),
            'boost_hp' => $this->integer(15),
            'boost_sp_attack' => $this->integer(15),
            'boost_sp_defense' => $this->integer(15),
            'boost_speed' => $this->integer(15),
            'boost_farming' => $this->integer(15),
            'boost_steeling' => $this->integer(15),
            'boost_wooding' => $this->integer(15),
            'avatar' => $this->string(8),
            'created_at' => $this->integer(11),
            'updated_at' => $this->integer(11),
            'created_by' => $this->string(36),
            'updated_by' => $this->string(36),
        ]);

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-nature-created_by}}',
            '{{%nature}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-nature-created_by}}',
            '{{%nature}}',
            'created_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `updated_by`
        $this->createIndex(
            '{{%idx-nature-updated_by}}',
            '{{%nature}}',
            'updated_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-nature-updated_by}}',
            '{{%nature}}',
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
            '{{%fk-nature-created_by}}',
            '{{%nature}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-nature-created_by}}',
            '{{%nature}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-nature-updated_by}}',
            '{{%nature}}'
        );

        // drops index for column `updated_by`
        $this->dropIndex(
            '{{%idx-nature-updated_by}}',
            '{{%nature}}'
        );

        $this->dropTable('{{%nature}}');
    }
}
