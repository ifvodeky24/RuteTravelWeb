<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MediaSosial */

$this->title = 'Tambah Data Media Sosial';
$this->params['breadcrumbs'][] = ['label' => 'Data Media Sosial', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="media-sosial-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
