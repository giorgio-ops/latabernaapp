<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "preferencia".
 *
 * @property string $email
 * @property string $fecha
 * @property string $seleccionCocktail
 * @property string $seleccionColor
 * @property string $seleccionTransporte
 * @property string $seleccionHora
 * @property string $seleccionCompania
 * @property string $seleccion6
 * @property string $latitud
 * @property string $longitud
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
            [['email'], 'required'],
            [['fecha'], 'safe'],
            [['seleccionCocktail', 'seleccionColor', 'seleccionTransporte', 'seleccionHora', 'seleccionCompania', 'seleccion6'], 'string'],
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
            'seleccionCocktail' => 'Seleccion Cocktail',
            'seleccionColor' => 'Seleccion Color',
            'seleccionTransporte' => 'Seleccion Transporte',
            'seleccionHora' => 'Seleccion Hora',
            'seleccionCompania' => 'Seleccion Compania',
            'seleccion6' => 'Seleccion6',
            'latitud' => 'Latitud',
            'longitud' => 'Longitud',
        ];
    }
}
