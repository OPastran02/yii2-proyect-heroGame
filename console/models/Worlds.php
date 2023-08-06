<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "worlds".
 *
 * @property int $id
 * @property int|null $race_id
 * @property int|null $chapter
 * @property string|null $description
 * @property string|null $avatar
 * @property int $available
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property string|null $created_by
 * @property string|null $updated_by
 *
 * @property User $createdBy
 * @property PlayersWorlds[] $playersWorlds
 * @property Race $race
 * @property Rewards[] $rewards
 * @property Rewards[] $rewards0
 * @property User $updatedBy
 * @property Waves[] $waves
 */
class Worlds extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'worlds';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['race_id', 'chapter', 'available', 'created_at', 'updated_at'], 'integer'],
            [['description'], 'string'],
            [['avatar'], 'string', 'max' => 8],
            [['created_by', 'updated_by'], 'string', 'max' => 36],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['created_by' => 'id']],
            [['race_id'], 'exist', 'skipOnError' => true, 'targetClass' => Race::class, 'targetAttribute' => ['race_id' => 'id']],
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
            'race_id' => 'Race ID',
            'chapter' => 'Chapter',
            'description' => 'Description',
            'avatar' => 'Avatar',
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
     * Gets query for [[PlayersWorlds]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPlayersWorlds()
    {
        return $this->hasMany(PlayersWorlds::class, ['worlds_id' => 'id']);
    }

    /**
     * Gets query for [[Race]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRace()
    {
        return $this->hasOne(Race::class, ['id' => 'race_id']);
    }

    /**
     * Gets query for [[Rewards]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRewards()
    {
        return $this->hasMany(Rewards::class, ['item_id' => 'id']);
    }

    /**
     * Gets query for [[Rewards0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRewards0()
    {
        return $this->hasMany(Rewards::class, ['worlds_id' => 'id']);
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
     * Gets query for [[Waves]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWaves()
    {
        return $this->hasMany(Waves::class, ['mundo_id' => 'id']);
    }
}
