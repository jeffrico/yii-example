<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "productos".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $describcion
 * @property string $precio
 * @property integer $pedido_id
 */
class Productos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'productos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'pedido_id'], 'required'],
            [['id', 'pedido_id'], 'integer'],
            [['nombre', 'precio'], 'string', 'max' => 45],
            [['describcion'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'describcion' => 'Describcion',
            'precio' => 'Precio',
            'pedido_id' => 'Pedido ID',
        ];
    }

    /**
     * @inheritdoc
     * @return ProductosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProductosQuery(get_called_class());
    }
}
