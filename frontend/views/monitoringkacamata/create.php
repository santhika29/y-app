<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\MonitoringKacamata */

$this->title = 'Create Monitoring Kacamata';
$this->params['breadcrumbs'][] = ['label' => 'Monitoring Kacamata', 'url' => ['/monitoringkacamata']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="monitoring-kacamata-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
