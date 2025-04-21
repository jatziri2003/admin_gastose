<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Ahorro;

/**
 * AhorroSearch represents the model behind the search form of `app\models\Ahorro`.
 */
class AhorroSearch extends Ahorro
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['aho_id', 'aho_fktaho', 'aho_fkusuario', 'aho_fktiempo'], 'integer'],
            [['aho_cantidad'], 'number'],
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
        $query = Ahorro::find();

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
            'aho_id' => $this->aho_id,
            'aho_cantidad' => $this->aho_cantidad,
            'aho_fktaho' => $this->aho_fktaho,
            'aho_fkusuario' => $this->aho_fkusuario,
            'aho_fktiempo' => $this->aho_fktiempo,
        ]);

        return $dataProvider;
    }
}
