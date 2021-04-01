<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MediaSosialSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Media Sosial';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="media-sosial-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Media Sosial', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

<div class="box">
        <div class="box-header">
            <b>
                <center>
                    <h3 class="box-title">Data Media Sosial</h3>
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
                            <center>Id Media Sosial</center>
                        </th>
                        <th>
                            <center>Website</center>
                        </th>
                        <th>
                            <center>Facebook</center>
                        </th>
                        <th>
                            <center>Instagram</center>
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
                            <center><?= $db['id_media_sosial'] ?></center>
                        </td>
                        <td>
                            <center><?= $db['website'] ?></center>
                        </td>
                        <td>
                            <center><?= $db['facebook'] ?></center>
                        </td>
                        <td>
                            <center><?= $db['instagram'] ?></center>
                        </td>

                        <td>
                            <center>
                                <?= Html::a('<i class="fa fa-search"></i>', ['/media-sosial/view', 'id' => $db['id_media_sosial']], ['class' => 'btn btn-warning btn-xs']) ?>
                                <?= Html::a('<i class="fa fa-pencil"></i>', ['/media-sosial/update', 'id' => $db['id_media_sosial']], ['class' => 'btn btn-info btn-xs']) ?>
                                <?= Html::a('<i class="fa fa-trash"></i>', ['/media-sosial/delete', 'id' => $db['id_media_sosial']], [
                                    'class' => 'btn btn-danger btn-xs',
                                    'data' => [
                                        'confirm' => 'anda yakin ingin menghapus "' . $db['id_media_sosial'] . '"?',
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
