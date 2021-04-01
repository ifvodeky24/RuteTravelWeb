<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Perusahaan */

$this->title = 'Perbarui Data: ' . $model->nama_perusahaan;
$this->params['breadcrumbs'][] = ['label' => 'Data Perusahaan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama_perusahaan, 'url' => ['view', 'id' => $model->id_perusahaan]];
$this->params['breadcrumbs'][] = 'Perbarui';
?>
<div class="perusahaan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
