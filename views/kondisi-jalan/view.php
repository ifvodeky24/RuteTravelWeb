<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\KondisiJalan */

$this->title = $model->id_kondisi_jalan;
$this->params['breadcrumbs'][] = ['label' => 'Kondisi Jalans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="kondisi-jalan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Perbarui', ['update', 'id' => $model->id_kondisi_jalan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Hapus', ['delete', 'id' => $model->id_kondisi_jalan], [
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
            'id_kondisi_jalan',
            'nama_lokasi',
            [
                'label'=>'foto',
                'format'=>'raw',
                'value' => function($data){
                    $url = Yii::$app->getHomeUrl(). "/files/images/kondisi_jalan_images/" .$data['foto'];

                    return Html::img($url, ['alt'=>'Gambar Tidak Ada', 'class'=>'img-circle user-img',
                        'height'=>'100', 'width'=>'100', 'style'=>'object-fit: cover']);
                }
            ],
            'tanggal',
            'latitude',
            'longitude',
            'deskripsi',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
