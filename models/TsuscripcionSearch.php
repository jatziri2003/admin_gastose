<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tsuscripcion;

/**
 * TsuscripcionSearch represents the model behind the search form of `app\models\Tsuscripcion`.
 */
class TsuscripcionSearch extends Tsuscripcion
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tsus_id'], 'integer'],
            [['tsus_descripcion', 'tsus_plan'], 'safe'],
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
     * @param string|null $formName Form name to be used into `->load()` method.
     *
     * @return ActiveDataProvider
     */
    public function search($params, $formName = null)
    {
        $query = Tsuscripcion::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params, $formName);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'tsus_id' => $this->tsus_id,
        ]);

        $query->andFilterWhere(['like', 'tsus_descripcion', $this->tsus_descripcion])
            ->andFilterWhere(['like', 'tsus_plan', $this->tsus_plan]);

        return $dataProvider;
    }
}
