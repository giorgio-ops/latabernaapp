<?php
 

namespace app\api\modules\v1\controllers;
 
class PedidoController  extends \yii\rest\ActiveController
{
 
    public $modelClass = 'app\models\Pedido';
    /*public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'pedidos',
    ];*/
 
}