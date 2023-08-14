<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "stats".
 *
 * @property string $id
 * @property int $attack
 * @property int $defense
 * @property int $hp
 * @property int $sp_attack
 * @property int $sp_defense
 * @property int $speed
 * @property int $farming
 * @property int $steeling
 * @property int $wooding
 * @property int $attackBst
 * @property int $defenseBst
 * @property int $hpBst
 * @property int $sp_attackBst
 * @property int $sp_defenseBst
 * @property int $speedBst
 * @property int $farmingBst
 * @property int $steelingBst
 * @property int $woodingBst
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property string|null $created_by
 * @property string|null $updated_by
 *
 * @property User $createdBy
 * @property Heroes[] $heroes
 * @property User $updatedBy
 */
class stat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'stats';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'attack', 'defense', 'hp', 'sp_attack', 'sp_defense', 'speed', 'farming', 'steeling', 'wooding', 'attackBst', 'defenseBst', 'hpBst', 'sp_attackBst', 'sp_defenseBst', 'speedBst', 'farmingBst', 'steelingBst', 'woodingBst'], 'required'],
            [['attack', 'defense', 'hp', 'sp_attack', 'sp_defense', 'speed', 'farming', 'steeling', 'wooding', 'attackBst', 'defenseBst', 'hpBst', 'sp_attackBst', 'sp_defenseBst', 'speedBst', 'farmingBst', 'steelingBst', 'woodingBst', 'created_at', 'updated_at'], 'integer'],
            [['id', 'created_by', 'updated_by'], 'string', 'max' => 36],
            [['id'], 'unique'],
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
            'attack' => 'Attack',
            'defense' => 'Defense',
            'hp' => 'Hp',
            'sp_attack' => 'Sp Attack',
            'sp_defense' => 'Sp Defense',
            'speed' => 'Speed',
            'farming' => 'Farming',
            'steeling' => 'Steeling',
            'wooding' => 'Wooding',
            'attackBst' => 'Attack Bst',
            'defenseBst' => 'Defense Bst',
            'hpBst' => 'Hp Bst',
            'sp_attackBst' => 'Sp Attack Bst',
            'sp_defenseBst' => 'Sp Defense Bst',
            'speedBst' => 'Speed Bst',
            'farmingBst' => 'Farming Bst',
            'steelingBst' => 'Steeling Bst',
            'woodingBst' => 'Wooding Bst',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }

    /**
     * Gets query for [[CreatedBy]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\UserQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::class, ['id' => 'created_by'])->inverseOf('stats');
    }

    /**
     * Gets query for [[Heroes]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\HeroesQuery
     */
    public function getHeroes()
    {
        return $this->hasMany(Heroes::class, ['stats_id' => 'id'])->inverseOf('stats');
    }

    /**
     * Gets query for [[UpdatedBy]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\UserQuery
     */
    public function getUpdatedBy()
    {
        return $this->hasOne(User::class, ['id' => 'updated_by'])->inverseOf('stats0');
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\statQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\statQuery(get_called_class());
    }
}
