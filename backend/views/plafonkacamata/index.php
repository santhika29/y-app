<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\PlafonKacamataSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Plafon Kacamatas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="plafon-kacamata-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Plafon Kacamata', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'status_peserta_id',
            'hak_kacamata_id',
            'band',
            'biaya',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
