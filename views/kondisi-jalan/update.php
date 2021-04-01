<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\KondisiJalan */

$this->title = 'Perbarui Data: ' . $model->nama_lokasi;
$this->params['breadcrumbs'][] = ['label' => 'Data Kondisi Jalans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama_lokasi, 'url' => ['view', 'id' => $model->id_kondisi_jalan]];
$this->params['breadcrumbs'][] = 'Perbarui';
?>
<div class="kondisi-jalan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
