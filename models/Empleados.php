<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "empleados".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $apellido
 * @property string $sueldo
 * @property string $telefono
 * @property integer $oficinas_id
 */
class Empleados extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'empleados';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'oficinas_id'], 'required'],
            [['id', 'oficinas_id'], 'integer'],
            [['nombre', 'apellido', 'sueldo', 'telefono'], 'string', 'max' => 45],
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
            'apellido' => 'Apellido',
            'sueldo' => 'Sueldo',
            'telefono' => 'Telefono',
            'oficinas_id' => 'Oficinas ID',
        ];
    }

    /**
     * @inheritdoc
     * @return EmpleadosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new EmpleadosQuery(get_called_class());
    }
}
