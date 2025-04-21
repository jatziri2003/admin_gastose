<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\models\Dashboard;
use yii\data\ActiveDataProvider;

/**
 * DashboardSearch represents the model behind the search form of `app\models\Dashboard`.
 */
class DashboardSearch extends Dashboard
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['das_id', 'das_orden', 'das_estatus'], 'integer'],
            [['das_imagen', 'das_titulo', 'das_url', 'das_roles'], 'safe'],
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
        $query = Dashboard::find();

        // Solo filtrar por roles si el usuario estÃ¡ autenticado y no es superadmin
        if (!Yii::$app->user->isGuest && !Yii::$app->user->isSuperAdmin) {
            $query = $query->where(['das_estatus' => 1]);

            $roles = Yii::$app->user->identity->roles ?? [];

            foreach ($roles as $rol) {
                $query = $query->andWhere(['like', 'das_roles', $rol->name]);
            }

            $query = $query->orderBy(['das_orden' => SORT_ASC]);
        } else {
            // Para usuarios no autenticados o superadmins: mostrar todos activos
            $query = $query->where(['das_estatus' => 1]);
            $query = $query->orderBy(['das_orden' => SORT_ASC]);
        }

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params, $formName);

        if (!$this->validate()) {
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'das_id' => $this->das_id,
            'das_orden' => $this->das_orden,
            'das_estatus' => $this->das_estatus,
        ]);

        $query->andFilterWhere(['like', 'das_imagen', $this->das_imagen])
              ->andFilterWhere(['like', 'das_titulo', $this->das_titulo])
              ->andFilterWhere(['like', 'das_url', $this->das_url])
              ->andFilterWhere(['like', 'das_roles', $this->das_roles]);

        return $dataProvider;
    }
}