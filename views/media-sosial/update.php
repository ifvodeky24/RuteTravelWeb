<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MediaSosial */

$this->title = 'Perbarui Data: ' . $model->id_media_sosial;
$this->params['breadcrumbs'][] = ['label' => 'Data Media Sosial', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_media_sosial, 'url' => ['view', 'id' => $model->id_media_sosial]];
$this->params['breadcrumbs'][] = 'Perbarui';
?>
<div class="media-sosial-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
