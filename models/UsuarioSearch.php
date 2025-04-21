<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Usuario;

/**
 * UsuarioSearch represents the model behind the search form of `app\models\Usuario`.
 */
class UsuarioSearch extends Usuario
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['usu_id', 'usu_fkcarrera', 'usu_fkcolonia', 'usu_fkuser'], 'integer'],
            [['usu_nombre', 'usu_apellidop', 'usu_apellidom', 'usu_fecha_nac', 'usu_sexo', 'usu_num_control'], 'safe'],
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
        $query = Usuario::find();

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
            'usu_id' => $this->usu_id,
            'usu_fecha_nac' => $this->usu_fecha_nac,
            'usu_fkcarrera' => $this->usu_fkcarrera,
            'usu_fkcolonia' => $this->usu_fkcolonia,
            'usu_fkuser' => $this->usu_fkuser,
        ]);

        $query->andFilterWhere(['like', 'usu_nombre', $this->usu_nombre])
            ->andFilterWhere(['like', 'usu_apellidop', $this->usu_apellidop])
            ->andFilterWhere(['like', 'usu_apellidom', $this->usu_apellidom])
            ->andFilterWhere(['like', 'usu_sexo', $this->usu_sexo])
            ->andFilterWhere(['like', 'usu_num_control', $this->usu_num_control]);

        return $dataProvider;
    }
}
