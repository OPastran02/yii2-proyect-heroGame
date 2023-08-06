<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nature".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property int|null $boost_attack
 * @property int|null $boost_defense
 * @property int|null $boost_hp
 * @property int|null $boost_sp_attack
 * @property int|null $boost_sp_defense
 * @property int|null $boost_speed
 * @property int|null $boost_farming
 * @property int|null $boost_steeling
 * @property int|null $boost_wooding
 * @property string|null $avatar
 * @property int $available
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property string|null $created_by
 * @property string|null $updated_by
 *
 * @property User $createdBy
 * @property Heroes[] $heroes
 * @property User $updatedBy
 */
class Natures extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nature';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['boost_attack', 'boost_defense', 'boost_hp', 'boost_sp_attack', 'boost_sp_defense', 'boost_speed', 'boost_farming', 'boost_steeling', 'boost_wooding', 'available', 'created_at', 'updated_at'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['avatar'], 'string', 'max' => 8],
            [['created_by', 'updated_by'], 'string', 'max' => 36],
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
            'boost_attack' => 'Boost Attack',
            'boost_defense' => 'Boost Defense',
            'boost_hp' => 'Boost Hp',
            'boost_sp_attack' => 'Boost Sp Attack',
            'boost_sp_defense' => 'Boost Sp Defense',
            'boost_speed' => 'Boost Speed',
            'boost_farming' => 'Boost Farming',
            'boost_steeling' => 'Boost Steeling',
            'boost_wooding' => 'Boost Wooding',
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
     * Gets query for [[Heroes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHeroes()
    {
        return $this->hasMany(Heroes::class, ['nature_id' => 'id']);
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
