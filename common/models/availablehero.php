<?php

namespace common\models;
use yii\db\ActiveRecord;
use yii\db\QueryBuilder;

use Yii;

/**
 * This is the model class for table "availableheroes".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property string|null $world
 * @property string|null $avatar
 * @property string|null $avatarBlock
 * @property int|null $race_id
 * @property int|null $rarity_id
 * @property int|null $nature_id
 * @property int|null $type_id
 * @property int $attack_min
 * @property int $attack_max
 * @property int $b_attack_min
 * @property int $b_Battack_max
 * @property int $defense_min
 * @property int $defense_max
 * @property int $b_defense_min
 * @property int $b_defense_max
 * @property int $hp_min
 * @property int $hp_max
 * @property int $b_hp_min
 * @property int $b_hp_max
 * @property int $sp_attack_min
 * @property int $sp_attack_max
 * @property int $b_sp_attack_min
 * @property int $b_sp_attack_max
 * @property int $sp_defense_min
 * @property int $sp_defense_max
 * @property int $b_sp_defense_min
 * @property int $b_sp_defense_max
 * @property int $speed_min
 * @property int $speed_max
 * @property int $b_speed_min
 * @property int $b_speed_max
 * @property int $farming_min
 * @property int $farming_max
 * @property int $b_farming_min
 * @property int $b_farming_max
 * @property int $steeling_min
 * @property int $steeling_max
 * @property int $b_steeling_min
 * @property int $b_steeling_max
 * @property int $wooding_min
 * @property int $wooding_max
 * @property int $b_wooding_min
 * @property int $b_wooding_max
 * @property int $available
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property string|null $created_by
 * @property string|null $updated_by
 */
class availablehero extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'availableheroes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description', 'world'], 'string'],
            [['race_id', 'rarity_id', 'nature_id', 'type_id', 'attack_min', 'attack_max', 'b_attack_min', 'b_Battack_max', 'defense_min', 'defense_max', 'b_defense_min', 'b_defense_max', 'hp_min', 'hp_max', 'b_hp_min', 'b_hp_max', 'sp_attack_min', 'sp_attack_max', 'b_sp_attack_min', 'b_sp_attack_max', 'sp_defense_min', 'sp_defense_max', 'b_sp_defense_min', 'b_sp_defense_max', 'speed_min', 'speed_max', 'b_speed_min', 'b_speed_max', 'farming_min', 'farming_max', 'b_farming_min', 'b_farming_max', 'steeling_min', 'steeling_max', 'b_steeling_min', 'b_steeling_max', 'wooding_min', 'wooding_max', 'b_wooding_min', 'b_wooding_max', 'available', 'created_at', 'updated_at'], 'integer'],
            [['attack_min', 'attack_max', 'b_attack_min', 'b_Battack_max', 'defense_min', 'defense_max', 'b_defense_min', 'b_defense_max', 'hp_min', 'hp_max', 'b_hp_min', 'b_hp_max', 'sp_attack_min', 'sp_attack_max', 'b_sp_attack_min', 'b_sp_attack_max', 'sp_defense_min', 'sp_defense_max', 'b_sp_defense_min', 'b_sp_defense_max', 'speed_min', 'speed_max', 'b_speed_min', 'b_speed_max', 'farming_min', 'farming_max', 'b_farming_min', 'b_farming_max', 'steeling_min', 'steeling_max', 'b_steeling_min', 'b_steeling_max', 'wooding_min', 'wooding_max', 'b_wooding_min', 'b_wooding_max', 'available'], 'required'],
            [['name'], 'string', 'max' => 255],
            [['avatar', 'avatarBlock'], 'string', 'max' => 8],
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
            'world' => 'World',
            'avatar' => 'Avatar',
            'avatarBlock' => 'Avatar Block',
            'race_id' => 'Race ID',
            'rarity_id' => 'Rarity ID',
            'nature_id' => 'Nature ID',
            'type_id' => 'Type ID',
            'attack_min' => 'Attack Min',
            'attack_max' => 'Attack Max',
            'b_attack_min' => 'B Attack Min',
            'b_Battack_max' => 'B Battack Max',
            'defense_min' => 'Defense Min',
            'defense_max' => 'Defense Max',
            'b_defense_min' => 'B Defense Min',
            'b_defense_max' => 'B Defense Max',
            'hp_min' => 'Hp Min',
            'hp_max' => 'Hp Max',
            'b_hp_min' => 'B Hp Min',
            'b_hp_max' => 'B Hp Max',
            'sp_attack_min' => 'Sp Attack Min',
            'sp_attack_max' => 'Sp Attack Max',
            'b_sp_attack_min' => 'B Sp Attack Min',
            'b_sp_attack_max' => 'B Sp Attack Max',
            'sp_defense_min' => 'Sp Defense Min',
            'sp_defense_max' => 'Sp Defense Max',
            'b_sp_defense_min' => 'B Sp Defense Min',
            'b_sp_defense_max' => 'B Sp Defense Max',
            'speed_min' => 'Speed Min',
            'speed_max' => 'Speed Max',
            'b_speed_min' => 'B Speed Min',
            'b_speed_max' => 'B Speed Max',
            'farming_min' => 'Farming Min',
            'farming_max' => 'Farming Max',
            'b_farming_min' => 'B Farming Min',
            'b_farming_max' => 'B Farming Max',
            'steeling_min' => 'Steeling Min',
            'steeling_max' => 'Steeling Max',
            'b_steeling_min' => 'B Steeling Min',
            'b_steeling_max' => 'B Steeling Max',
            'wooding_min' => 'Wooding Min',
            'wooding_max' => 'Wooding Max',
            'b_wooding_min' => 'B Wooding Min',
            'b_wooding_max' => 'B Wooding Max',
            'available' => 'Available',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\availableheroQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\availableheroQuery(get_called_class());
    }

    public function delete()
    {
        $id = $this->id;
        $sql = "DELETE FROM availableheroes WHERE id = :id";

        Yii::$app->db->createCommand($sql, [':id' => $id])->execute();

        parent::delete(); // Llama al método delete original para realizar la eliminación
    }

}
