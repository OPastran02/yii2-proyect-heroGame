<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%rewards}}`.
 */
class m230914_162641_create_rewards_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $table = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';

        $this->createTable('{{%rewards}}', [
            'id' => $this->primaryKey()->notNull()->unique(),
            'idObject' => $this->integer()->notNull(),
            'bronze' => $this->integer()->notNull()->defaultValue(0),
            'silver' => $this->integer()->notNull()->defaultValue(0),
            'gold' => $this->integer()->notNull()->defaultValue(0),
            'crystal' => $this->integer()->notNull()->defaultValue(0),
            'quantity' => $this->integer()->notNull()->defaultValue(0),
            'available' => $this->integer(1)->notNull()->defaultValue(1),
            'createdAt' => $this->timestamp(),
            'updatedAt' => $this->timestamp(),
            'createdBy' => $this->string(36),
            'updatedBy' => $this->string(36),
        ],$table);

        // Creates index for column `idObject`
        $this->createIndex(
            '{{%idx-instanceChapters-idObject}}',
            '{{%rewards}}',
            'idObject'
        );

        // Add foreign key for table `{{%players}}`
        $this->addForeignKey(
            '{{%fk-instanceChapters-idObject}}',
            '{{%rewards}}',
            'idObject',
            '{{%objects}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-instanceChapters-idObject', '{{%rewards}}');
        $this->dropTable('{{%rewards}}');
    }
}
