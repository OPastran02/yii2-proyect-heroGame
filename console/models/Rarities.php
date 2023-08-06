<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rarity".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property string|null $avatar
 * @property int $available
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property string|null $created_by
 * @property string|null $updated_by
 *
 * @property Accesories[] $accesories
 * @property User $createdBy
 * @property Heroes[] $heroes
 * @property User $updatedBy
 */
class Rarities extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rarity';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['available', 'created_at', 'updated_at'], 'integer'],
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
            'avatar' => 'Avatar',
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
        return $this->hasMany(Accesories::class, ['rarity_id' => 'id']);
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
        return $this->hasMany(Heroes::class, ['rarity_id' => 'id']);
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
