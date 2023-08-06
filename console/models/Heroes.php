<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "heroes".
 *
 * @property string $id
 * @property string|null $player_id
 * @property string|null $name
 * @property string|null $description
 * @property int|null $rarity_id
 * @property int|null $nature_id
 * @property int|null $type_id
 * @property string|null $stats_id
 * @property int|null $race_id
 * @property int|null $experience
 * @property int|null $level
 * @property int|null $placement_id
 * @property int|null $isInQueue
 * @property int|null $orderInGeneralTeam
 * @property int|null $orderInRaceTeam
 * @property string|null $avatar
 * @property int|null $accesories_id
 * @property int|null $accesories_id1
 * @property int|null $accesories_id2
 * @property int $available
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property string|null $created_by
 * @property string|null $updated_by
 *
 * @property Accesories $accesories
 * @property Accesories $accesoriesId1
 * @property Accesories $accesoriesId2
 * @property User $createdBy
 * @property Nature $nature
 * @property Players $player
 * @property Race $race
 * @property Rarity $rarity
 * @property Stats $stats
 * @property Type $type
 * @property User $updatedBy
 */
class Heroes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'heroes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['description'], 'string'],
            [['rarity_id', 'nature_id', 'type_id', 'race_id', 'experience', 'level', 'placement_id', 'isInQueue', 'orderInGeneralTeam', 'orderInRaceTeam', 'accesories_id', 'accesories_id1', 'accesories_id2', 'available', 'created_at', 'updated_at'], 'integer'],
            [['id', 'player_id', 'stats_id', 'created_by', 'updated_by'], 'string', 'max' => 36],
            [['name'], 'string', 'max' => 255],
            [['avatar'], 'string', 'max' => 8],
            [['id'], 'unique'],
            [['accesories_id'], 'exist', 'skipOnError' => true, 'targetClass' => Accesories::class, 'targetAttribute' => ['accesories_id' => 'id']],
            [['accesories_id1'], 'exist', 'skipOnError' => true, 'targetClass' => Accesories::class, 'targetAttribute' => ['accesories_id1' => 'id']],
            [['accesories_id2'], 'exist', 'skipOnError' => true, 'targetClass' => Accesories::class, 'targetAttribute' => ['accesories_id2' => 'id']],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['created_by' => 'id']],
            [['nature_id'], 'exist', 'skipOnError' => true, 'targetClass' => Nature::class, 'targetAttribute' => ['nature_id' => 'id']],
            [['player_id'], 'exist', 'skipOnError' => true, 'targetClass' => Players::class, 'targetAttribute' => ['player_id' => 'id']],
            [['race_id'], 'exist', 'skipOnError' => true, 'targetClass' => Race::class, 'targetAttribute' => ['race_id' => 'id']],
            [['rarity_id'], 'exist', 'skipOnError' => true, 'targetClass' => Rarity::class, 'targetAttribute' => ['rarity_id' => 'id']],
            [['stats_id'], 'exist', 'skipOnError' => true, 'targetClass' => Stats::class, 'targetAttribute' => ['stats_id' => 'id']],
            [['type_id'], 'exist', 'skipOnError' => true, 'targetClass' => Type::class, 'targetAttribute' => ['type_id' => 'id']],
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
            'player_id' => 'Player ID',
            'name' => 'Name',
            'description' => 'Description',
            'rarity_id' => 'Rarity ID',
            'nature_id' => 'Nature ID',
            'type_id' => 'Type ID',
            'stats_id' => 'Stats ID',
            'race_id' => 'Race ID',
            'experience' => 'Experience',
            'level' => 'Level',
            'placement_id' => 'Placement ID',
            'isInQueue' => 'Is In Queue',
            'orderInGeneralTeam' => 'Order In General Team',
            'orderInRaceTeam' => 'Order In Race Team',
            'avatar' => 'Avatar',
            'accesories_id' => 'Accesories ID',
            'accesories_id1' => 'Accesories Id1',
            'accesories_id2' => 'Accesories Id2',
            'available' => 'Available',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }

    /**
     * Gets query for [[Accesories]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAccesories()
    {
        return $this->hasOne(Accesories::class, ['id' => 'accesories_id']);
    }

    /**
     * Gets query for [[AccesoriesId1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAccesoriesId1()
    {
        return $this->hasOne(Accesories::class, ['id' => 'accesories_id1']);
    }

    /**
     * Gets query for [[AccesoriesId2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAccesoriesId2()
    {
        return $this->hasOne(Accesories::class, ['id' => 'accesories_id2']);
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
     * Gets query for [[Nature]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNature()
    {
        return $this->hasOne(Nature::class, ['id' => 'nature_id']);
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
     * Gets query for [[Race]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRace()
    {
        return $this->hasOne(Race::class, ['id' => 'race_id']);
    }

    /**
     * Gets query for [[Rarity]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRarity()
    {
        return $this->hasOne(Rarity::class, ['id' => 'rarity_id']);
    }

    /**
     * Gets query for [[Stats]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStats()
    {
        return $this->hasOne(Stats::class, ['id' => 'stats_id']);
    }

    /**
     * Gets query for [[Type]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(Type::class, ['id' => 'type_id']);
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
