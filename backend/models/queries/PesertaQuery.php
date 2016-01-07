<?php

namespace backend\models\queries;

/**
 * This is the ActiveQuery class for [[\backend\models\Peserta]].
 *
 * @see \backend\models\Peserta
 */
class PesertaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \backend\models\Peserta[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \backend\models\Peserta|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}