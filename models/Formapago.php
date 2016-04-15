<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "formapago".
 *
 * @property integer $idFormapago
 * @property string $descripcion
 *
 * @property Pedido[] $pedidos
 */
class Formapago extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'formapago';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idFormapago', 'descripcion'], 'required'],
            [['idFormapago'], 'integer'],
            [['descripcion'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idFormapago' => 'Id Formapago',
            'descripcion' => 'Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPedidos()
    {
        return $this->hasMany(Pedido::className(), ['idFormapago' => 'idFormapago']);
    }
}
