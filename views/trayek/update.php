<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Trayek */

$this->title = 'Perbarui Data: ' . $model->nama_trayek;
$this->params['breadcrumbs'][] = ['label' => 'Data Trayek', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama_trayek, 'url' => ['view', 'id' => $model->id_trayek]];
$this->params['breadcrumbs'][] = 'Perbarui';
?>
<div class="trayek-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
