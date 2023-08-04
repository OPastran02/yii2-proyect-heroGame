<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%boxRatios}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 * - `{{%user}}`
 */
class m230804_221347_create_boxRatios_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%boxRatios}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'description' => $this->text(),
            'race_id' => $this->integer(2),
            'booster' => $this->string(255),
            'modifiers' => $this->integer(2),
            'crystals' => $this->integer(2),
            'diamonds' => $this->integer(2),
            'coins' => $this->integer(2),
            'available' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->integer(11),
            'updated_at' => $this->integer(11),
            'created_by' => $this->string(36),
            'updated_by' => $this->string(36),
        ]);

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-boxRatios-created_by}}',
            '{{%boxRatios}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-boxRatios-created_by}}',
            '{{%boxRatios}}',
            'created_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `updated_by`
        $this->createIndex(
            '{{%idx-boxRatios-updated_by}}',
            '{{%boxRatios}}',
            'updated_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-boxRatios-updated_by}}',
            '{{%boxRatios}}',
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
            '{{%fk-boxRatios-created_by}}',
            '{{%boxRatios}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-boxRatios-created_by}}',
            '{{%boxRatios}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-boxRatios-updated_by}}',
            '{{%boxRatios}}'
        );

        // drops index for column `updated_by`
        $this->dropIndex(
            '{{%idx-boxRatios-updated_by}}',
            '{{%boxRatios}}'
        );

        $this->dropTable('{{%boxRatios}}');
    }
}
