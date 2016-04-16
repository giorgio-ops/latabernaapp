<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Detallecarrito;

/**
 * DetallecarritoSearch represents the model behind the search form about `app\models\Detallecarrito`.
 */
class DetallecarritoSearch extends Detallecarrito
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['codProducto'], 'safe'],
            [['precio', 'subtotal'], 'number'],
            [['cantidad', 'idCarrito'], 'integer'],
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
        $query = Detallecarrito::find();

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
            'precio' => $this->precio,
            'cantidad' => $this->cantidad,
            'subtotal' => $this->subtotal,
            'idCarrito' => $this->idCarrito,
        ]);

        $query->andFilterWhere(['like', 'codProducto', $this->codProducto]);

        return $dataProvider;
    }
}
