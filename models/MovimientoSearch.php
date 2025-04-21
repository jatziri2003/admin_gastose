<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\models\Movimiento;
use yii\data\ActiveDataProvider;
use webvimark\modules\UserManagement\models\User;

/**
 * MovimientoSearch represents the model behind the search form of `app\models\Movimiento`.
 */
class MovimientoSearch extends Movimiento
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mov_id', 'mov_fkusuario', 'mov_fktmov'], 'integer'],
            [['mov_cantidad'], 'number'],
            [['mov_fecha'], 'safe'],
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
        $query = Movimiento::find();
        if(User::hasRole(['Clientes'])){
                $usuario=Usuario::find()->where(['usu_fkuser'=>Yii::$app->user->identity->id])->one();
                if(isset($usuario)){
                    $query=$query->where(['mov_fkusuario'=>$usuario->usu_id]);
                }
        }

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
            'mov_id' => $this->mov_id,
            'mov_fkusuario' => $this->mov_fkusuario,
            'mov_fktmov' => $this->mov_fktmov,
            'mov_cantidad' => $this->mov_cantidad,
            'mov_fecha' => $this->mov_fecha,
        ]);

        return $dataProvider;
    }
}
