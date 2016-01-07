<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PlafonKacamata */

$this->title = 'Update Plafon Kacamata: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Plafon Kacamatas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="plafon-kacamata-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
