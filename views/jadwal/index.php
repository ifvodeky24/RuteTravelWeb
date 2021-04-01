<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\JadwalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Jadwal';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jadwal-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah Data Jadwal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

<div class="box">
        <div class="box-header">
            <b>
                <center>
                    <h3 class="box-title">Data Jadwal</h3>
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
                            <center>Id Jadwal</center>
                        </th>
                        <th>
                            <center>Jam</center>
                        </th>
                        <th>
                            <center>Hari</center>
                        </th>
                        <th>
                            <center>Aksi</center>
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
                            <center><?= $db['id_jadwal'] ?></center>
                        </td>
                        <td>
                            <center><?= $db['jam'] ?></center>
                        </td>
                        <td>
                            <center><?= $db['hari'] ?></center>
                        </td>

                        <td>
                            <center>
                                <?= Html::a('<i class="fa fa-search"></i>', ['/jadwal/view', 'id' => $db['id_jadwal']], ['class' => 'btn btn-warning btn-xs']) ?>
                                <?= Html::a('<i class="fa fa-pencil"></i>', ['/jadwal/update', 'id' => $db['id_jadwal']], ['class' => 'btn btn-info btn-xs']) ?>
                                <?= Html::a('<i class="fa fa-trash"></i>', ['/jadwal/delete', 'id' => $db['id_jadwal']], [
                                    'class' => 'btn btn-danger btn-xs',
                                    'data' => [
                                        'confirm' => 'anda yakin ingin menghapus "' . $db['jam'] . '"?',
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
