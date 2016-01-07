<?php

namespace frontend\models\queries;

/**
 * This is the ActiveQuery class for [[\frontend\models\MonitoringKacamata]].
 *
 * @see \frontend\models\MonitoringKacamata
 */
class MonitoringKacamataQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \frontend\models\MonitoringKacamata[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \frontend\models\MonitoringKacamata|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}