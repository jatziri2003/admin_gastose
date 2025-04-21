<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cuenta;

/**
 * CuentaSearch represents the model behind the search form of `app\models\Cuenta`.
 */
class CuentaSearch extends Cuenta
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cue_id', 'cue_fkusuario', 'cue_fkban'], 'integer'],
            [['cue_num_tarjeta', 'cue_tipo_tarjeta'], 'safe'],
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
        $query = Cuenta::find();

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
            'cue_id' => $this->cue_id,
            'cue_fkusuario' => $this->cue_fkusuario,
            'cue_fkban' => $this->cue_fkban,
        ]);

        $query->andFilterWhere(['like', 'cue_num_tarjeta', $this->cue_num_tarjeta])
            ->andFilterWhere(['like', 'cue_tipo_tarjeta', $this->cue_tipo_tarjeta]);

        return $dataProvider;
    }
}
