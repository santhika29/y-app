<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "monitoring_kacamata".
 *
 * @property string $id
 * @property string $nikkes
 * @property integer $hak_kacamata_id
 * @property string $tgl_ambil
 * @property string $created_at
 * @property string $updated_at
 * @property integer $created_by
 *
 * @property HakKacamata $hakKacamata
 * @property Peserta $nikkes0
 */
class MonitoringKacamata extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'monitoring_kacamata';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nikkes', 'hak_kacamata_id', 'tgl_ambil', 'created_at', 'updated_at'], 'required'],
            [['hak_kacamata_id', 'created_by'], 'integer'],
            [['tgl_ambil', 'created_at', 'updated_at'], 'safe'],
            [['nikkes'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nikkes' => 'Nikkes',
            'hak_kacamata_id' => 'Hak Kacamata ID',
            'tgl_ambil' => 'Tgl Ambil',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHakKacamata()
    {
        return $this->hasOne(HakKacamata::className(), ['id' => 'hak_kacamata_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNikkes0()
    {
        return $this->hasOne(Peserta::className(), ['nikkes' => 'nikkes']);
    }

    /**
     * @inheritdoc
     * @return \frontend\models\queries\MonitoringKacamataQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \frontend\models\queries\MonitoringKacamataQuery(get_called_class());
    }
}
