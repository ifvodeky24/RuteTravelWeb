<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KondisiJalanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Kondisi Jalan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kondisi-jalan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah Data Kondisi Jalan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <div class="box">
        <div class="box-header">
            <b>
                <center>
                    <h3 class="box-title">Data Kondisi Jalan</h3>
                </center>
            </b>
        </div>

        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>
                            <center>No</center>
                        </th>
                        <th>
                            <center>Id Kondisi Jalan</center>
                        </th>
                        <th>
                            <center>Nama Lokasi</center>
                        </th>
                        <th>
                            <center>Foto</center>
                        </th>
                        <th>
                            <center>Tanggal</center>
                        </th>
                        <th>
                            <center>Latitude</center>
                        </th>
                        <th>
                            <center>Longitude</center>
                        </th>
                        <th>
                            <center>Deskripsi</center>
                        </th>
                    </tr>
                </thead>

                <tbody>

                    <?php
                    $no = 1;
                    foreach ($model as $db) :

                    ?>
                        <td>
                            <center><?= $no; ?></center>
                        </td>
                        <td>
                            <center><?= $db['id_kondisi_jalan'] ?></center>
                        </td>
                        <td>
                            <center><?= $db['nama_lokasi'] ?></center>
                        </td>
                        <td>
                            <center> <a href="<?= Yii::getAlias('@web') . '/files/images/kondisi_jalan_images/' . $db['foto']; ?>" target="_blank"><img class="img-circle" height="100" width="100" src="<?= Yii::getAlias('@web') . '/files/images/kondisi_jalan_images/' . $db['foto']; ?>"> </center>
                        </td>
                        <td>
                            <center><?= $db['tanggal'] ?></center>
                        </td>
                        <td>
                            <center><?= $db['latitude'] ?></center>
                        </td>
                        <td>
                            <center><?= $db['longitude'] ?></center>
                        </td>
                        <td>
                            <center><?= $db['deskripsi'] ?></center>
                        </td>

                        <td>
                            <center>
                                <?= Html::a('<i class="fa fa-search"></i>', ['/kondisi-jalan/view', 'id' => $db['id_kondisi_jalan']], ['class' => 'btn btn-warning btn-xs']) ?>
                                <?= Html::a('<i class="fa fa-pencil"></i>', ['/kondisi-jalan/update', 'id' => $db['id_kondisi_jalan']], ['class' => 'btn btn-info btn-xs']) ?>
                                <?= Html::a('<i class="fa fa-trash"></i>', ['/kondisi-jalan/delete', 'id' => $db['id_kondisi_jalan']], [
                                    'class' => 'btn btn-danger btn-xs',
                                    'data' => [
                                        'confirm' => 'anda yakin ingin menghapus "' . $db['nama_lokasi'] . '"?',
                                        'method' => 'post',
                                    ]
                                ]); ?>

                            </center>
                        </td>
                        </tr>

                    <?php $no++;
                    endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>


</div>