<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "hak_kacamata".
 *
 * @property integer $id
 * @property string $hak_kacamata
 *
 * @property MonitoringKacamata[] $monitoringKacamatas
 * @property PlafonKacamata[] $plafonKacamatas
 */
class HakKacamata extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hak_kacamata';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hak_kacamata'], 'required'],
            [['hak_kacamata'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'hak_kacamata' => 'Hak Kacamata',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMonitoringKacamatas()
    {
        return $this->hasMany(MonitoringKacamata::className(), ['hak_kacamata_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlafonKacamatas()
    {
        return $this->hasMany(PlafonKacamata::className(), ['hak_kacamata_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return \backend\models\queries\HakKacamataQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \backend\models\queries\HakKacamataQuery(get_called_class());
    }
}
