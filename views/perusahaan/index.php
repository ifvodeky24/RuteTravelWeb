<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PerusahaanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Perusahaan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perusahaan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah Data Perusahaan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


<div class="box">
        <div class="box-header">
            <b>
                <center>
                    <h3 class="box-title">Data Perusahaan</h3>
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
                            <center>Id Perusahaan</center>
                        </th>
                        <th>
                            <center>Trayek</center>
                        </th>
                        <th>
                            <center>Nama Perusahaan</center>
                        </th>
                        <th>
                            <center>Pimpinan</center>
                        </th>
                        <th>
                            <center>Foto</center>
                        </th>
                        <th>
                            <center>Aksi</center>
                        </th>
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
                            <center><?= $db['id_perusahaan'] ?></center>
                        </td>
                        <td>
                            <center><?= $db['nama_trayek'] ?></center>
                        </td>
                        <td>
                            <center><?= $db['nama_perusahaan'] ?></center>
                        </td>
                        <td>
                            <center><?= $db['pimpinan'] ?></center>
                        </td>
                        <td>
                            <center> <a href="<?= Yii::getAlias('@web') . '/files/images/perusahaan_images/' . $db['foto']; ?>" target="_blank"><img class="img-circle" height="100" width="100" src="<?= Yii::getAlias('@web') . '/files/images/perusahaan_images/' . $db['foto']; ?>"> </center>
                        </td>

                        <td>
                            <center>
                                <?= Html::a('<i class="fa fa-search"></i>', ['/perusahaan/view', 'id' => $db['id_perusahaan']], ['class' => 'btn btn-warning btn-xs']) ?>
                                <?= Html::a('<i class="fa fa-pencil"></i>', ['/perusahaan/update', 'id' => $db['id_perusahaan']], ['class' => 'btn btn-info btn-xs']) ?>
                                <?= Html::a('<i class="fa fa-trash"></i>', ['/perusahaan/delete', 'id' => $db['id_perusahaan']], [
                                    'class' => 'btn btn-danger btn-xs',
                                    'data' => [
                                        'confirm' => 'anda yakin ingin menghapus "' . $db['nama_perusahaan'] . '"?',
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
