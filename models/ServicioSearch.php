<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Servicio;

/**
 * ServicioSearch represents the model behind the search form of `app\models\Servicio`.
 */
class ServicioSearch extends Servicio
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ser_id', 'movimiento_mov_id', 'tipo_servicio_tser_id'], 'integer'],
            [['ser_monto'], 'number'],
            [['ser_fecha_pago', 'ser_motivo'], 'safe'],
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
        $query = Servicio::find();

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
            'ser_id' => $this->ser_id,
            'ser_monto' => $this->ser_monto,
            'ser_fecha_pago' => $this->ser_fecha_pago,
            'movimiento_mov_id' => $this->movimiento_mov_id,
            'tipo_servicio_tser_id' => $this->tipo_servicio_tser_id,
        ]);

        $query->andFilterWhere(['like', 'ser_motivo', $this->ser_motivo]);

        return $dataProvider;
    }
}
