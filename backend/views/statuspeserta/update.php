<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\StatusPeserta */

$this->title = 'Update Status Peserta: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Status Pesertas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="status-peserta-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
