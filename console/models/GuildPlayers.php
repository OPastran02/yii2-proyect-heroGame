<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "guilds_players".
 *
 * @property int $id
 * @property int|null $guild_id
 * @property string|null $player_id
 * @property string|null $title
 * @property int|null $wood
 * @property int|null $steel
 * @property int|null $food
 * @property int|null $gold
 * @property int $available
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property string|null $created_by
 * @property string|null $updated_by
 *
 * @property User $createdBy
 * @property Guilds $guild
 * @property Players $player
 * @property User $updatedBy
 */
class GuildPlayers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'guilds_players';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['guild_id', 'wood', 'steel', 'food', 'gold', 'available', 'created_at', 'updated_at'], 'integer'],
            [['player_id', 'created_by', 'updated_by'], 'string', 'max' => 36],
            [['title'], 'string', 'max' => 255],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['created_by' => 'id']],
            [['guild_id'], 'exist', 'skipOnError' => true, 'targetClass' => Guilds::class, 'targetAttribute' => ['guild_id' => 'id']],
            [['player_id'], 'exist', 'skipOnError' => true, 'targetClass' => Players::class, 'targetAttribute' => ['player_id' => 'id']],
            [['updated_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['updated_by' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'guild_id' => 'Guild ID',
            'player_id' => 'Player ID',
            'title' => 'Title',
            'wood' => 'Wood',
            'steel' => 'Steel',
            'food' => 'Food',
            'gold' => 'Gold',
            'available' => 'Available',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }

    /**
     * Gets query for [[CreatedBy]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::class, ['id' => 'created_by']);
    }

    /**
     * Gets query for [[Guild]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGuild()
    {
        return $this->hasOne(Guilds::class, ['id' => 'guild_id']);
    }

    /**
     * Gets query for [[Player]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPlayer()
    {
        return $this->hasOne(Players::class, ['id' => 'player_id']);
    }

    /**
     * Gets query for [[UpdatedBy]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUpdatedBy()
    {
        return $this->hasOne(User::class, ['id' => 'updated_by']);
    }
}
