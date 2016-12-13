<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "oficinas".
 *
 * @property integer $id
 * @property string $direccion
 * @property string $ciudad
 * @property string $pais
 */
class Oficinas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'oficinas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['direccion', 'ciudad', 'pais'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'direccion' => 'Direccion',
            'ciudad' => 'Ciudad',
            'pais' => 'Pais',
        ];
    }

    /**
     * @inheritdoc
     * @return OficinasQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OficinasQuery(get_called_class());
    }
}
