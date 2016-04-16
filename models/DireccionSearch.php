<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Direccion;

/**
 * DireccionSearch represents the model behind the search form about `app\models\Direccion`.
 */
class DireccionSearch extends Direccion
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idDireccion'], 'integer'],
            [['alias', 'descripcion', 'latitud', 'longitud', 'ciudad', 'telefono', 'email'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Direccion::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'idDireccion' => $this->idDireccion,
        ]);

        $query->andFilterWhere(['like', 'alias', $this->alias])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'latitud', $this->latitud])
            ->andFilterWhere(['like', 'longitud', $this->longitud])
            ->andFilterWhere(['like', 'ciudad', $this->ciudad])
            ->andFilterWhere(['like', 'telefono', $this->telefono])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
