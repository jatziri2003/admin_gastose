<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Colonia;

/**
 * ColoniaSearch represents the model behind the search form of `app\models\Colonia`.
 */
class ColoniaSearch extends Colonia
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['col_id', 'col_fkmunicipio'], 'integer'],
            [['col_nombre', 'col_asentamiento', 'col_codigo_postal'], 'safe'],
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
        $query = Colonia::find();

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
            'col_id' => $this->col_id,
            'col_fkmunicipio' => $this->col_fkmunicipio,
        ]);

        $query->andFilterWhere(['like', 'col_nombre', $this->col_nombre])
            ->andFilterWhere(['like', 'col_asentamiento', $this->col_asentamiento])
            ->andFilterWhere(['like', 'col_codigo_postal', $this->col_codigo_postal]);

        return $dataProvider;
    }
}
