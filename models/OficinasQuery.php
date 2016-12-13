<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Oficinas]].
 *
 * @see Oficinas
 */
class OficinasQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Oficinas[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Oficinas|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
