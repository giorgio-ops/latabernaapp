<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "direccion".
 *
 * @property integer $idDireccion
 * @property string $alias
 * @property string $descripcion
 * @property string $latitud
 * @property string $longitud
 * @property string $ciudad
 * @property string $telefono
 * @property string $email
 *
 * @property Pedido[] $pedidos
 */
class Direccion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'direccion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idDireccion', 'alias', 'descripcion', 'ciudad', 'telefono', 'email'], 'required'],
            [['idDireccion'], 'integer'],
            [['alias', 'descripcion', 'latitud', 'longitud', 'ciudad', 'telefono', 'email'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idDireccion' => 'Id Direccion',
            'alias' => 'Alias',
            'descripcion' => 'Descripcion',
            'latitud' => 'Latitud',
            'longitud' => 'Longitud',
            'ciudad' => 'Ciudad',
            'telefono' => 'Telefono',
            'email' => 'Email',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPedidos()
    {
        return $this->hasMany(Pedido::className(), ['idDireccion' => 'idDireccion', 'email' => 'email']);
    }
}
