<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ConstancyRequest;

/**
 * ConstancyRequestSearch represents the model behind the search form about `app\models\ConstancyRequest`.
 */
class ConstancyRequestSearch extends ConstancyRequest
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'request_id', 'contancy_type', 'amount'], 'integer'],
            [['unit_cost'], 'number'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = ConstancyRequest::find();

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
            'request_id' => $this->request_id,
            'contancy_type' => $this->contancy_type,
            'amount' => $this->amount,
            'unit_cost' => $this->unit_cost,
        ]);

        return $dataProvider;
    }
}
