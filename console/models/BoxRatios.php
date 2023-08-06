<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "boxratios".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property int|null $race_id
 * @property string|null $booster
 * @property int|null $modifiers
 * @property int|null $crystals
 * @property int|null $diamonds
 * @property int|null $coins
 * @property int $available
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property string|null $created_by
 * @property string|null $updated_by
 *
 * @property User $createdBy
 * @property User $updatedBy
 */
class BoxRatios extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'boxratios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['race_id', 'modifiers', 'crystals', 'diamonds', 'coins', 'available', 'created_at', 'updated_at'], 'integer'],
            [['name', 'booster'], 'string', 'max' => 255],
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
            'race_id' => 'Race ID',
            'booster' => 'Booster',
            'modifiers' => 'Modifiers',
            'crystals' => 'Crystals',
            'diamonds' => 'Diamonds',
            'coins' => 'Coins',
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
}
