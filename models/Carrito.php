<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "carrito".
 *
 * @property integer $idCarrito
 * @property double $total
 * @property string $estado
 *
 * @property Detallecarrito[] $detallecarritos
 * @property Pedido[] $pedidos
 */
class Carrito extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'carrito';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idCarrito', 'total', 'estado'], 'required'],
            [['idCarrito'], 'integer'],
            [['total'], 'number'],
            [['estado'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idCarrito' => 'Id Carrito',
            'total' => 'Total',
            'estado' => 'Estado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetallecarritos()
    {
        return $this->hasMany(Detallecarrito::className(), ['idCarrito' => 'idCarrito']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPedidos()
    {
        return $this->hasMany(Pedido::className(), ['idCarrito' => 'idCarrito']);
    }
}
