<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tahorro;

/**
 * TahorroSearch represents the model behind the search form of `app\models\Tahorro`.
 */
class TahorroSearch extends Tahorro
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['taho_id'], 'integer'],
            [['taho_descripcion'], 'safe'],
            [['taho_monto_min', 'taho_monto_max'], 'number'],
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
        $query = Tahorro::find();

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
            'taho_id' => $this->taho_id,
            'taho_monto_min' => $this->taho_monto_min,
            'taho_monto_max' => $this->taho_monto_max,
        ]);

        $query->andFilterWhere(['like', 'taho_descripcion', $this->taho_descripcion]);

        return $dataProvider;
    }
}
