<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MediaSosial */

$this->title = $model->id_media_sosial;
$this->params['breadcrumbs'][] = ['label' => 'Data Media Sosial', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="media-sosial-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Perbarui', ['update', 'id' => $model->id_media_sosial], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Hapus', ['delete', 'id' => $model->id_media_sosial], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Apa anda yakin ingin menghapus item ini?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_media_sosial',
            'website',
            'facebook',
            'instagram',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
