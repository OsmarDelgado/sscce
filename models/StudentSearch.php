<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Student;

/**
 * StudentSearch represents the model behind the search form about `app\models\Student`.
 */
class StudentSearch extends Student
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['first_name', 'last_name', 'student_id', 'mail', 'token', 'study_program_id'], 'safe'],
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
        $query = Student::find();

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
		//$query->joinWith(['studyProgram, name']);

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'studen.first_name', $this->first_name])
            ->andFilterWhere(['like', 'student.last_name', $this->last_name])
            ->andFilterWhere(['like', 'student.student_id', $this->student_id])
            ->andFilterWhere(['like', 'student.mail', $this->mail])
			->andFilterWhere(['like', 'study_program_id', $this->study_program_id])
            ->andFilterWhere(['like', 'student.token', $this->token]);

        return $dataProvider;
    }
}
