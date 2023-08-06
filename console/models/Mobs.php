<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mobs".
 *
 * @property int $id
 * @property int|null $wave_id
 * @property int|null $order
 * @property string|null $name
 * @property int|null $attack
 * @property int|null $defense
 * @property int|null $hp
 * @property int|null $sp_attack
 * @property int|null $sp_defense
 * @property int|null $speed
 * @property int $available
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property string|null $created_by
 * @property string|null $updated_by
 *
 * @property User $createdBy
 * @property User $updatedBy
 * @property Waves $wave
 */
class Mobs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mobs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['wave_id', 'order', 'attack', 'defense', 'hp', 'sp_attack', 'sp_defense', 'speed', 'available', 'created_at', 'updated_at'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['created_by', 'updated_by'], 'string', 'max' => 36],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['created_by' => 'id']],
            [['updated_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['updated_by' => 'id']],
            [['wave_id'], 'exist', 'skipOnError' => true, 'targetClass' => Waves::class, 'targetAttribute' => ['wave_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'wave_id' => 'Wave ID',
            'order' => 'Order',
            'name' => 'Name',
            'attack' => 'Attack',
            'defense' => 'Defense',
            'hp' => 'Hp',
            'sp_attack' => 'Sp Attack',
            'sp_defense' => 'Sp Defense',
            'speed' => 'Speed',
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
     * Gets query for [[UpdatedBy]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUpdatedBy()
    {
        return $this->hasOne(User::class, ['id' => 'updated_by']);
    }

    /**
     * Gets query for [[Wave]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWave()
    {
        return $this->hasOne(Waves::class, ['id' => 'wave_id']);
    }
}
