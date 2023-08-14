<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\reward]].
 *
 * @see \common\models\reward
 */
class rewardQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\reward[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\reward|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
