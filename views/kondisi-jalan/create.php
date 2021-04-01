<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\KondisiJalan */

$this->title = 'Tambah Data Kondisi Jalan';
$this->params['breadcrumbs'][] = ['label' => 'Data Kondisi Jalan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kondisi-jalan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
