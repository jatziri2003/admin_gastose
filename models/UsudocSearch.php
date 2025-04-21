<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Usudoc;

/**
 * UsudocSearch represents the model behind the search form of `app\models\Usudoc`.
 */
class UsudocSearch extends Usudoc
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['udo_fkusuario', 'udo_fkdocumento'], 'integer'],
            [['udo_fecha', 'udo_estado'], 'safe'],
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
        $query = Usudoc::find();

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
            'udo_fkusuario' => $this->udo_fkusuario,
            'udo_fkdocumento' => $this->udo_fkdocumento,
            'udo_fecha' => $this->udo_fecha,
        ]);

        $query->andFilterWhere(['like', 'udo_estado', $this->udo_estado]);

        return $dataProvider;
    }
}
