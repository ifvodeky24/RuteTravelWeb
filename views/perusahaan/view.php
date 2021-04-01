<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Perusahaan */

$this->title = $model->nama_perusahaan;
$this->params['breadcrumbs'][] = ['label' => 'Data Perusahaan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="perusahaan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Perbarui', ['update', 'id' => $model->id_perusahaan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Hapus', ['delete', 'id' => $model->id_perusahaan], [
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
            'id_perusahaan',
            [
                'label'=>'Nama Trayek',
                'format'=>'raw',
                'value' => function($data){
                    $sql = (new \Yii\db\query())
                            ->select('*')
                            ->from('tb_trayek')
                            ->where(['id_trayek' => $data['id_trayek']])
                            ->one();
                    
                    return $sql['nama_trayek'];
                }
            ],
            'nama_perusahaan',
            'pimpinan',
            [
                'label'=>'foto',
                'format'=>'raw',
                'value' => function($data){
                    $url = Yii::$app->getHomeUrl(). "/files/images/perusahaan_images/" .$data['foto'];

                    return Html::img($url, ['alt'=>'Gambar Tidak Ada', 'class'=>'img-circle user-img',
                        'height'=>'100', 'width'=>'100', 'style'=>'object-fit: cover']);
                }
            ],
            'nomor_handphone',
            'alamat_perusahaan',
            'website',
            'facebook',
            'instagram',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
