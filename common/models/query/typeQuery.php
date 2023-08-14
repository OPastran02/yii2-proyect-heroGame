<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\type]].
 *
 * @see \common\models\type
 */
class typeQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\type[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\type|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
