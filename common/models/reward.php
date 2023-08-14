<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "rewards".
 *
 * @property int $id
 * @property int|null $worlds_id
 * @property int|null $item_id
 * @property int|null $quantity
 * @property int $available
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property string|null $created_by
 * @property string|null $updated_by
 *
 * @property User $createdBy
 * @property Worlds $item
 * @property User $updatedBy
 * @property Worlds $worlds
 */
class reward extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rewards';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['worlds_id', 'item_id', 'quantity', 'available', 'created_at', 'updated_at'], 'integer'],
            [['created_by', 'updated_by'], 'string', 'max' => 36],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['created_by' => 'id']],
            [['item_id'], 'exist', 'skipOnError' => true, 'targetClass' => Worlds::class, 'targetAttribute' => ['item_id' => 'id']],
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
            'worlds_id' => 'Worlds ID',
            'item_id' => 'Item ID',
            'quantity' => 'Quantity',
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
     * @return \yii\db\ActiveQuery|\common\models\query\UserQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::class, ['id' => 'created_by'])->inverseOf('rewards');
    }

    /**
     * Gets query for [[Item]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\WorldsQuery
     */
    public function getItem()
    {
        return $this->hasOne(Worlds::class, ['id' => 'item_id'])->inverseOf('rewards');
    }

    /**
     * Gets query for [[UpdatedBy]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\UserQuery
     */
    public function getUpdatedBy()
    {
        return $this->hasOne(User::class, ['id' => 'updated_by'])->inverseOf('rewards0');
    }

    /**
     * Gets query for [[Worlds]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\WorldsQuery
     */
    public function getWorlds()
    {
        return $this->hasOne(Worlds::class, ['id' => 'worlds_id'])->inverseOf('rewards0');
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\rewardQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\rewardQuery(get_called_class());
    }
}
