<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\HakKacamataSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Hak Kacamatas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hak-kacamata-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Hak Kacamata', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'hak_kacamata',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
