<?php

namespace frontend\models;

use Yii;
use backend\models\Peserta;
use yii\helpers\ArrayHelper;
use yii\behaviors\TimestampBehavior;

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
            [['nikkes', 'hak_kacamata_id', 'tgl_ambil'], 'required'],
            [['hak_kacamata_id'], 'integer'],
            [['hak_kacamata_id'],'in','range'=>array_keys($this->getHakKacamataList())],
            [['tgl_ambil', 'created_at', 'updated_at'], 'safe'],
            [['nikkes'], 'string', 'max' => 10],
            [['hak_kacamata_id'], 'exist', 'skipOnError' => true, 'targetClass' => HakKacamata::className(), 'targetAttribute' => ['hak_kacamata_id' => 'id']],
            [['nikkes'], 'exist', 'skipOnError' => true, 'targetClass' => Peserta::className(), 'targetAttribute' => ['nikkes' => 'nikkes']],
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
            'hak_kacamata_id' => 'Hak Kacamata',
            'tgl_ambil' => 'Tanggal Pengambilan',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'hakkacamataName' => Yii::t('app','HakKacamata'),
            'nikkes0' => 'Nama',
        ];
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at',
                'value' => new \yii\db\Expression('NOW()'),
            ],
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
     * @return MonitoringKacamataQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \frontend\models\queries\MonitoringKacamataQuery(get_called_class());
    }

    public function getHakKacamataList()
    {
        $dropOptions = HakKacamata::find()->asArray()->all();
        return ArrayHelper::map($dropOptions,'id','hak_kacamata');
    }

    public function getHakKacamataName()
    {
        return $this->hak_kacamata->hak_kacamata;
    }

    public function beforeValidate()
    {
        if ($this->tgl_ambil != null) {                    
            $new_date_format = date('Y-m-d', strtotime($this->tgl_ambil));
            $this->tgl_ambil = $new_date_format;
        }   

            return parent::beforeValidate();
    }
}
