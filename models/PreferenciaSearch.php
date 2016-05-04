<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Preferencia;

/**
 * PreferenciaSearch represents the model behind the search form about `app\models\Preferencia`.
 */
class PreferenciaSearch extends Preferencia
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'fecha', 'seleccionPaisaje', 'seleccionCocktail', 'seleccionColor', 'seleccionHora', 'seleccionTransporte', 'seleccionUso', 'latitud', 'longitud', 'estado'], 'safe'],
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
        $query = Preferencia::find();

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
            'fecha' => $this->fecha,
        ]);

        $query->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'seleccionPaisaje', $this->seleccionPaisaje])
            ->andFilterWhere(['like', 'seleccionCocktail', $this->seleccionCocktail])
            ->andFilterWhere(['like', 'seleccionColor', $this->seleccionColor])
            ->andFilterWhere(['like', 'seleccionHora', $this->seleccionHora])
            ->andFilterWhere(['like', 'seleccionTransporte', $this->seleccionTransporte])
            ->andFilterWhere(['like', 'seleccionUso', $this->seleccionUso])
            ->andFilterWhere(['like', 'latitud', $this->latitud])
            ->andFilterWhere(['like', 'longitud', $this->longitud])
            ->andFilterWhere(['like', 'estado', $this->estado]);

        return $dataProvider;
    }
}
