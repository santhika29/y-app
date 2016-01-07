<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\MonitoringKacamata */

$this->title = 'Update Monitoring Kacamata: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Monitoring Kacamatas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="monitoring-kacamata-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
