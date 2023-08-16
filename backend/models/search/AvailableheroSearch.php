<?php

namespace backend\models\Search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\availablehero;

/**
 * availableheroSearch represents the model behind the search form of `common\models\availablehero`.
 */
class availableheroSearch extends availablehero
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'race_id', 'rarity_id', 'nature_id', 'type_id', 'attack_min', 'attack_max', 'b_attack_min', 'b_Battack_max', 'defense_min', 'defense_max', 'b_defense_min', 'b_defense_max', 'hp_min', 'hp_max', 'b_hp_min', 'b_hp_max', 'sp_attack_min', 'sp_attack_max', 'b_sp_attack_min', 'b_sp_attack_max', 'sp_defense_min', 'sp_defense_max', 'b_sp_defense_min', 'b_sp_defense_max', 'speed_min', 'speed_max', 'b_speed_min', 'b_speed_max', 'farming_min', 'farming_max', 'b_farming_min', 'b_farming_max', 'steeling_min', 'steeling_max', 'b_steeling_min', 'b_steeling_max', 'wooding_min', 'wooding_max', 'b_wooding_min', 'b_wooding_max', 'available', 'created_at', 'updated_at'], 'integer'],
            [['name', 'description', 'world', 'avatar', 'avatarBlock', 'created_by', 'updated_by'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = availablehero::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'race_id' => $this->race_id,
            'rarity_id' => $this->rarity_id,
            'nature_id' => $this->nature_id,
            'type_id' => $this->type_id,
            'attack_min' => $this->attack_min,
            'attack_max' => $this->attack_max,
            'b_attack_min' => $this->b_attack_min,
            'b_Battack_max' => $this->b_Battack_max,
            'defense_min' => $this->defense_min,
            'defense_max' => $this->defense_max,
            'b_defense_min' => $this->b_defense_min,
            'b_defense_max' => $this->b_defense_max,
            'hp_min' => $this->hp_min,
            'hp_max' => $this->hp_max,
            'b_hp_min' => $this->b_hp_min,
            'b_hp_max' => $this->b_hp_max,
            'sp_attack_min' => $this->sp_attack_min,
            'sp_attack_max' => $this->sp_attack_max,
            'b_sp_attack_min' => $this->b_sp_attack_min,
            'b_sp_attack_max' => $this->b_sp_attack_max,
            'sp_defense_min' => $this->sp_defense_min,
            'sp_defense_max' => $this->sp_defense_max,
            'b_sp_defense_min' => $this->b_sp_defense_min,
            'b_sp_defense_max' => $this->b_sp_defense_max,
            'speed_min' => $this->speed_min,
            'speed_max' => $this->speed_max,
            'b_speed_min' => $this->b_speed_min,
            'b_speed_max' => $this->b_speed_max,
            'farming_min' => $this->farming_min,
            'farming_max' => $this->farming_max,
            'b_farming_min' => $this->b_farming_min,
            'b_farming_max' => $this->b_farming_max,
            'steeling_min' => $this->steeling_min,
            'steeling_max' => $this->steeling_max,
            'b_steeling_min' => $this->b_steeling_min,
            'b_steeling_max' => $this->b_steeling_max,
            'wooding_min' => $this->wooding_min,
            'wooding_max' => $this->wooding_max,
            'b_wooding_min' => $this->b_wooding_min,
            'b_wooding_max' => $this->b_wooding_max,
            'available' => $this->available,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'world', $this->world])
            ->andFilterWhere(['like', 'avatar', $this->avatar])
            ->andFilterWhere(['like', 'avatarBlock', $this->avatarBlock])
            ->andFilterWhere(['like', 'created_by', $this->created_by])
            ->andFilterWhere(['like', 'updated_by', $this->updated_by]);

        return $dataProvider;
    }
}
