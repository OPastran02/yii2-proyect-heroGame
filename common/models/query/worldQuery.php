<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\world]].
 *
 * @see \common\models\world
 */
class worldQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\world[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\world|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
