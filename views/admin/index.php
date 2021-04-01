<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AdminSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Admin';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah Data Admin', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <div class="box">
        <div class="box-header">
            <b>
                <center>
                    <h3 class="box-title">Data Admin</h3>
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
                            <center>Id Admin</center>
                        </th>
                        <th>
                            <center>Username</center>
                        </th>
                        <th>
                            <center>Password</center>
                        </th>
                        <th>
                            <center>Nama Lengkap</center>
                        </th>
                        <th>
                            <center>Foto</center>
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
                            <center><?= $db['id_admin'] ?></center>
                        </td>
                        <td>
                            <center><?= $db['username'] ?></center>
                        </td>
                        <td>
                            <center><?= $db['password'] ?></center>
                        </td>
                        <td>
                            <center><?= $db['nama_lengkap'] ?></center>
                        </td>
                        <td>
                            <center> <a href="<?= Yii::getAlias('@web') . '/files/images/admin_images/' . $db['foto']; ?>" target="_blank"><img class="img-circle" height="100" width="100" src="<?= Yii::getAlias('@web') . '/files/images/admin_images/' . $db['foto']; ?>"> </center>
                        </td>

                        <td>
                            <center>
                                <?= Html::a('<i class="fa fa-search"></i>', ['/admin/view', 'id' => $db['id_admin']], ['class' => 'btn btn-warning btn-xs']) ?>
                                <?= Html::a('<i class="fa fa-pencil"></i>', ['/admin/update', 'id' => $db['id_admin']], ['class' => 'btn btn-info btn-xs']) ?>
                                <?= Html::a('<i class="fa fa-trash"></i>', ['/admin/delete', 'id' => $db['id_admin']], [
                                    'class' => 'btn btn-danger btn-xs',
                                    'data' => [
                                        'confirm' => 'anda yakin ingin menghapus "' . $db['username'] . '"?',
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