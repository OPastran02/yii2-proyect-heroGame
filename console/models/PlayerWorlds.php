<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "players_worlds".
 *
 * @property int $id
 * @property string|null $player_id
 * @property int|null $worlds_id
 * @property string|null $avatar
 * @property int|null $stars
 * @property int $available
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property string|null $created_by
 * @property string|null $updated_by
 *
 * @property User $createdBy
 * @property Players $player
 * @property User $updatedBy
 * @property Worlds $worlds
 */
class PlayerWorlds extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'players_worlds';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['worlds_id', 'stars', 'available', 'created_at', 'updated_at'], 'integer'],
            [['player_id', 'created_by', 'updated_by'], 'string', 'max' => 36],
            [['avatar'], 'string', 'max' => 8],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['created_by' => 'id']],
            [['player_id'], 'exist', 'skipOnError' => true, 'targetClass' => Players::class, 'targetAttribute' => ['player_id' => 'id']],
            [['updated_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['updated_by' => 'id']],
            [['worlds_id'], 'exist', 'skipOnError' => true, 'targetClass' => Worlds::class, 'targetAttribute' => ['worlds_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'player_id' => 'Player ID',
            'worlds_id' => 'Worlds ID',
            'avatar' => 'Avatar',
            'stars' => 'Stars',
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

    /**
     * Gets query for [[Worlds]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWorlds()
    {
        return $this->hasOne(Worlds::class, ['id' => 'worlds_id']);
    }
}
