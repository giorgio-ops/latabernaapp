<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "preferencia".
 *
 * @property string $email
 * @property string $fecha
 * @property string $seleccionPaisaje
 * @property string $seleccionCocktail
 * @property string $seleccionColor
 * @property string $seleccionHora
 * @property string $seleccionTransporte
 * @property string $seleccionUso
 * @property string $latitud
 * @property string $longitud
 * @property string $estado
 */
class Preferencia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'preferencia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'estado'], 'required'],
            [['fecha'], 'safe'],
            [['seleccionPaisaje', 'seleccionCocktail', 'seleccionColor', 'seleccionHora', 'seleccionTransporte', 'seleccionUso', 'estado'], 'string'],
            [['email', 'latitud', 'longitud'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'email' => 'Email',
            'fecha' => 'Fecha',
            'seleccionPaisaje' => 'Seleccion Paisaje',
            'seleccionCocktail' => 'Seleccion Cocktail',
            'seleccionColor' => 'Seleccion Color',
            'seleccionHora' => 'Seleccion Hora',
            'seleccionTransporte' => 'Seleccion Transporte',
            'seleccionUso' => 'Seleccion Uso',
            'latitud' => 'Latitud',
            'longitud' => 'Longitud',
            'estado' => 'Estado',
        ];
    }
}
