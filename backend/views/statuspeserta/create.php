<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\StatusPeserta */

$this->title = 'Create Status Peserta';
$this->params['breadcrumbs'][] = ['label' => 'Status Pesertas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="status-peserta-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
