<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Notificacion;

/**
 * NotificacionSearch represents the model behind the search form of `app\models\Notificacion`.
 */
class NotificacionSearch extends Notificacion
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['not_id', 'not_fktmov'], 'integer'],
            [['not_alerta'], 'safe'],
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
        $query = Notificacion::find();

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
            'not_id' => $this->not_id,
            'not_fktmov' => $this->not_fktmov,
        ]);

        $query->andFilterWhere(['like', 'not_alerta', $this->not_alerta]);

        return $dataProvider;
    }
}
