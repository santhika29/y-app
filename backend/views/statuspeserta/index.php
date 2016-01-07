<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\StatusPesertaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Status Pesertas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="status-peserta-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Status Peserta', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'status_peserta',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
