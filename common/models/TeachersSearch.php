<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Teachers;

/**
 * TeachersSearch represents the model behind the search form of `common\models\Teachers`.
 */
class TeachersSearch extends Teachers
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'mb_id'], 'integer'],
            [['name', 'surname', 'fathername', 'birthday', 'jinsi', 'fan', 'mehnat_faoliyati', 'yutuqlar', 'toifa'], 'safe'],
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
        $query = Teachers::find();

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
            'user_id' => $this->user_id,
            'birthday' => $this->birthday,
            'mb_id' => $this->mb_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'surname', $this->surname])
            ->andFilterWhere(['like', 'fathername', $this->fathername])
            ->andFilterWhere(['like', 'jinsi', $this->jinsi])
            ->andFilterWhere(['like', 'fan', $this->fan])
            ->andFilterWhere(['like', 'mehnat_faoliyati', $this->mehnat_faoliyati])
            ->andFilterWhere(['like', 'yutuqlar', $this->yutuqlar])
            ->andFilterWhere(['like', 'toifa', $this->toifa]);

        return $dataProvider;
    }
}
