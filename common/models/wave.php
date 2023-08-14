<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "waves".
 *
 * @property int $id
 * @property int|null $mundo_id
 * @property int|null $wave
 * @property int $available
 * @property string|null $created_by
 * @property string|null $updated_by
 *
 * @property User $createdBy
 * @property Mobs[] $mobs
 * @property Worlds $mundo
 * @property User $updatedBy
 */
class wave extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'waves';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mundo_id', 'wave', 'available'], 'integer'],
            [['created_by', 'updated_by'], 'string', 'max' => 36],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['created_by' => 'id']],
            [['mundo_id'], 'exist', 'skipOnError' => true, 'targetClass' => Worlds::class, 'targetAttribute' => ['mundo_id' => 'id']],
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
            'mundo_id' => 'Mundo ID',
            'wave' => 'Wave',
            'available' => 'Available',
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
        return $this->hasOne(User::class, ['id' => 'created_by'])->inverseOf('waves');
    }

    /**
     * Gets query for [[Mobs]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\MobsQuery
     */
    public function getMobs()
    {
        return $this->hasMany(Mobs::class, ['wave_id' => 'id'])->inverseOf('wave');
    }

    /**
     * Gets query for [[Mundo]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\WorldsQuery
     */
    public function getMundo()
    {
        return $this->hasOne(Worlds::class, ['id' => 'mundo_id'])->inverseOf('waves');
    }

    /**
     * Gets query for [[UpdatedBy]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\UserQuery
     */
    public function getUpdatedBy()
    {
        return $this->hasOne(User::class, ['id' => 'updated_by'])->inverseOf('waves0');
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\waveQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\waveQuery(get_called_class());
    }
}