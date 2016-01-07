<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\HakKacamata */

$this->title = 'Create Hak Kacamata';
$this->params['breadcrumbs'][] = ['label' => 'Hak Kacamatas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hak-kacamata-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
