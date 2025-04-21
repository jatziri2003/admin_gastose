<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tmovimiento;

/**
 * TmovimientoSearch represents the model behind the search form of `app\models\Tmovimiento`.
 */
class TmovimientoSearch extends Tmovimiento
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tmov_id'], 'integer'],
            [['tmov_descripcion'], 'safe'],
            [['tmov_monto_min', 'tmov_monto_max'], 'number'],
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
        $query = Tmovimiento::find();

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
            'tmov_id' => $this->tmov_id,
            'tmov_monto_min' => $this->tmov_monto_min,
            'tmov_monto_max' => $this->tmov_monto_max,
        ]);

        $query->andFilterWhere(['like', 'tmov_descripcion', $this->tmov_descripcion]);

        return $dataProvider;
    }
}
