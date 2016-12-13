<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pedidos".
 *
 * @property integer $id
 * @property string $fecha-pedido
 * @property string $importe
 * @property integer $clientes_id
 * @property integer $oficinas_id
 */
class Pedidos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pedidos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fecha-pedido'], 'safe'],
            [['clientes_id', 'oficinas_id'], 'required'],
            [['clientes_id', 'oficinas_id'], 'integer'],
            [['importe'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fecha-pedido' => 'Fecha Pedido',
            'importe' => 'Importe',
            'clientes_id' => 'Clientes ID',
            'oficinas_id' => 'Oficinas ID',
        ];
    }

    /**
     * @inheritdoc
     * @return PedidosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PedidosQuery(get_called_class());
    }
}
