<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\PlafonKacamata;

/**
 * PlafonKacamataSearch represents the model behind the search form about `backend\models\PlafonKacamata`.
 */
class PlafonKacamataSearch extends PlafonKacamata
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'status_peserta_id', 'hak_kacamata_id'], 'integer'],
            [['band'], 'safe'],
            [['biaya'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = PlafonKacamata::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);
        if (!$this->validate()) {
            $query->where('1=0');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'status_peserta_id' => $this->status_peserta_id,
            'hak_kacamata_id' => $this->hak_kacamata_id,
            'biaya' => $this->biaya,
        ]);

        $query->andFilterWhere(['like', 'band', $this->band]);

        return $dataProvider;
    }
}
