<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\playerworld]].
 *
 * @see \common\models\playerworld
 */
class playerworldQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\playerworld[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\playerworld|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
