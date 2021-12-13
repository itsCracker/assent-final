<?php

namespace app\models;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\VwFileSearch;

/**
 * CountriesSearch represents the model behind the search form of `backend\models\Countries`.
 */
class CsvSearch extends VwFileSearch
{
    public $globalSearch;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['globalSearch'], 'safe'],
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
        $query = VwFileSearch::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 500,
            ],
            'sort' => [
                'defaultOrder' => [
                    'name' => SORT_ASC,
                ]
            ],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        $query->orFilterWhere(['like', 'agency', $this->globalSearch])
            ->orFilterWhere(['like', 'entity_number', $this->globalSearch])
            ->orFilterWhere(['like', 'type', $this->globalSearch])
            ->orFilterWhere(['like', 'programs', $this->globalSearch])
            ->orFilterWhere(['like', 'name', $this->globalSearch])
            ->orFilterWhere(['like', 'title', $this->globalSearch])
            ->orFilterWhere(['like', 'addresses', $this->globalSearch])
            ->orFilterWhere(['like', 'federal_register_notice', $this->globalSearch])
            ->orFilterWhere(['like', 'start_date', $this->globalSearch])
            ->orFilterWhere(['like', 'end_date', $this->globalSearch])
            ->orFilterWhere(['like', 'standard_order', $this->globalSearch])
            ->orFilterWhere(['like', 'license_requirement', $this->globalSearch])
            ->orFilterWhere(['like', 'license_policy', $this->globalSearch])
            ->orFilterWhere(['like', 'call_sign', $this->globalSearch])
            ->orFilterWhere(['like', 'vessel_type', $this->globalSearch])
            ->orFilterWhere(['like', 'gross_tonnage', $this->globalSearch])
            ->orFilterWhere(['like', 'gross_registered_tonnage', $this->globalSearch])
            ->orFilterWhere(['like', 'vessel_flag', $this->globalSearch])
            ->orFilterWhere(['like', 'vessel_owner', $this->globalSearch])
            ->orFilterWhere(['like', 'remarks', $this->globalSearch])
            ->orFilterWhere(['like', 'source_list_url', $this->globalSearch])
            ->orFilterWhere(['like', 'alt_names', $this->globalSearch])
            ->orFilterWhere(['like', 'citizenships', $this->globalSearch])
            ->orFilterWhere(['like', 'dates_of_birth', $this->globalSearch])
            ->orFilterWhere(['like', 'nationalities', $this->globalSearch])
            ->orFilterWhere(['like', 'places_of_birth', $this->globalSearch])
            ->orFilterWhere(['like', 'source_information_url', $this->globalSearch])
            ->orFilterWhere(['like', 'country', $this->globalSearch]);

        return $dataProvider;
    }
}
