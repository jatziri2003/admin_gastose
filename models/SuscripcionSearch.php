<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Suscripcion;

/**
 * SuscripcionSearch represents the model behind the search form of `app\models\Suscripcion`.
 */
class SuscripcionSearch extends Suscripcion
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sus_id', 'sus_fktsus', 'sus_fkmov'], 'integer'],
            [['sus_fecha_contratacion', 'sus_fecha_vencimiento'], 'safe'],
            [['sus_monto'], 'number'],
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
        $query = Suscripcion::find();

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
            'sus_id' => $this->sus_id,
            'sus_fktsus' => $this->sus_fktsus,
            'sus_fecha_contratacion' => $this->sus_fecha_contratacion,
            'sus_fecha_vencimiento' => $this->sus_fecha_vencimiento,
            'sus_monto' => $this->sus_monto,
            'sus_fkmov' => $this->sus_fkmov,
        ]);

        return $dataProvider;
    }
}
