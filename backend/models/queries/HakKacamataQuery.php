<?php

namespace backend\models\queries;

/**
 * This is the ActiveQuery class for [[\backend\models\HakKacamata]].
 *
 * @see \backend\models\HakKacamata
 */
class HakKacamataQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \backend\models\HakKacamata[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \backend\models\HakKacamata|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}