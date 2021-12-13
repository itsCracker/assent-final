<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Uk;

/**
 * UkSearch represents the model behind the search form of `backend\models\Uk`.
 */
class UkSearch extends Uk
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['uid'], 'integer'],
            [['agency', 'entity_number', 'type', 'programs', 'name', 'title', 'addresses', 'federal_register_notice', 'start_date', 'end_date', 'standard_order', 'license_requirement', 'license_policy', 'call_sign', 'vessel_type', 'gross_tonnage', 'gross_registered_tonnage', 'vessel_flag', 'vessel_owner', 'remarks', 'source_list_url', 'alt_names', 'citizenships', 'dates_of_birth', 'nationalities', 'places_of_birth', 'source_information_url', 'country'], 'safe'],
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
        $query = Uk::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 100,
            ],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'uid' => $this->uid,
        ]);

        $query->andFilterWhere(['like', 'agency', $this->agency])
            ->andFilterWhere(['like', 'entity_number', $this->entity_number])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'programs', $this->programs])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'addresses', $this->addresses])
            ->andFilterWhere(['like', 'federal_register_notice', $this->federal_register_notice])
            ->andFilterWhere(['like', 'start_date', $this->start_date])
            ->andFilterWhere(['like', 'end_date', $this->end_date])
            ->andFilterWhere(['like', 'standard_order', $this->standard_order])
            ->andFilterWhere(['like', 'license_requirement', $this->license_requirement])
            ->andFilterWhere(['like', 'license_policy', $this->license_policy])
            ->andFilterWhere(['like', 'call_sign', $this->call_sign])
            ->andFilterWhere(['like', 'vessel_type', $this->vessel_type])
            ->andFilterWhere(['like', 'gross_tonnage', $this->gross_tonnage])
            ->andFilterWhere(['like', 'gross_registered_tonnage', $this->gross_registered_tonnage])
            ->andFilterWhere(['like', 'vessel_flag', $this->vessel_flag])
            ->andFilterWhere(['like', 'vessel_owner', $this->vessel_owner])
            ->andFilterWhere(['like', 'remarks', $this->remarks])
            ->andFilterWhere(['like', 'source_list_url', $this->source_list_url])
            ->andFilterWhere(['like', 'alt_names', $this->alt_names])
            ->andFilterWhere(['like', 'citizenships', $this->citizenships])
            ->andFilterWhere(['like', 'dates_of_birth', $this->dates_of_birth])
            ->andFilterWhere(['like', 'nationalities', $this->nationalities])
            ->andFilterWhere(['like', 'places_of_birth', $this->places_of_birth])
            ->andFilterWhere(['like', 'source_information_url', $this->source_information_url])
            ->andFilterWhere(['like', 'country', $this->country]);

        return $dataProvider;
    }
}
