<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sucursal".
 *
 * @property integer $idSucursal
 * @property string $codigo
 * @property string $ciudad
 * @property string $lugar
 * @property string $direccion
 * @property string $latitud
 * @property string $longitud
 *
 * @property Pedido[] $pedidos
 */
class Sucursal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sucursal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idSucursal', 'codigo', 'ciudad', 'lugar', 'direccion', 'latitud', 'longitud'], 'required'],
            [['idSucursal'], 'integer'],
            [['codigo', 'ciudad', 'lugar', 'direccion', 'latitud', 'longitud'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idSucursal' => 'Id Sucursal',
            'codigo' => 'Codigo',
            'ciudad' => 'Ciudad',
            'lugar' => 'Lugar',
            'direccion' => 'Direccion',
            'latitud' => 'Latitud',
            'longitud' => 'Longitud',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPedidos()
    {
        return $this->hasMany(Pedido::className(), ['idSucursal' => 'idSucursal']);
    }
}
