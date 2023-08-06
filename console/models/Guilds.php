<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "guilds".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property int|null $experience
 * @property int|null $level
 * @property int|null $wood
 * @property int|null $steel
 * @property int|null $food
 * @property int|null $gold
 * @property string|null $castle_id
 * @property int|null $quantity
 * @property string|null $avatar
 * @property int $available
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property string|null $created_by
 * @property string|null $updated_by
 *
 * @property User $createdBy
 * @property GuildsPlayers[] $guildsPlayers
 * @property User $updatedBy
 */
class Guilds extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'guilds';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['experience', 'level', 'wood', 'steel', 'food', 'gold', 'quantity', 'available', 'created_at', 'updated_at'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['castle_id', 'created_by', 'updated_by'], 'string', 'max' => 36],
            [['avatar'], 'string', 'max' => 8],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['created_by' => 'id']],
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
            'name' => 'Name',
            'description' => 'Description',
            'experience' => 'Experience',
            'level' => 'Level',
            'wood' => 'Wood',
            'steel' => 'Steel',
            'food' => 'Food',
            'gold' => 'Gold',
            'castle_id' => 'Castle ID',
            'quantity' => 'Quantity',
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
     * Gets query for [[GuildsPlayers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGuildsPlayers()
    {
        return $this->hasMany(GuildsPlayers::class, ['guild_id' => 'id']);
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
