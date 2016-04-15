<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "detallecarrito".
 *
 * @property string $codProducto
 * @property double $precio
 * @property integer $cantidad
 * @property double $subtotal
 * @property integer $idCarrito
 *
 * @property Carrito $idCarrito0
 */
class Detallecarrito extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'detallecarrito';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['codProducto', 'precio', 'cantidad', 'subtotal', 'idCarrito'], 'required'],
            [['precio', 'subtotal'], 'number'],
            [['cantidad', 'idCarrito'], 'integer'],
            [['codProducto'], 'string', 'max' => 45],
            [['idCarrito'], 'exist', 'skipOnError' => true, 'targetClass' => Carrito::className(), 'targetAttribute' => ['idCarrito' => 'idCarrito']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'codProducto' => 'Cod Producto',
            'precio' => 'Precio',
            'cantidad' => 'Cantidad',
            'subtotal' => 'Subtotal',
            'idCarrito' => 'Id Carrito',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCarrito0()
    {
        return $this->hasOne(Carrito::className(), ['idCarrito' => 'idCarrito']);
    }
}
