<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TrayekSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Trayek';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trayek-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah Data Trayek', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


<div class="box">
    <div class="box-header">
        <b><center> <h3 class="box-title">Data Trayek</h3></center></b>
    </div>

<div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th><center>No</center></th>
            <th><center>Id Trayek</center></th>
            <th><center>Nama Trayek</center></th>
            <th><center>Asal</center></th>
            <th><center>Tujuan</center></th>
            <th><center>Aksi</center></th>
        </thead>

        <tbody>

        <?php
        $no=1;foreach($model as $db):

        ?>
           <td><center><?= $no; ?></center></td>    
           <td><center><?= $db['id_trayek']?></center></td>   
           <td><center><?= $db['nama_trayek']?></center></td>    
           <td><center><?= $db['asal']?></center></td>    
           <td><center><?= $db['tujuan']?></center></td>     

           <td> <center>
                <?= Html::a('<i class="fa fa-search"></i>', ['/trayek/view', 'id' =>$db['id_trayek']], ['class' => 'btn btn-warning btn-xs']) ?>
                <?= Html::a('<i class="fa fa-pencil"></i>', ['/trayek/update', 'id' =>$db['id_trayek']], ['class' => 'btn btn-info btn-xs']) ?>
                <?= Html::a('<i class="fa fa-trash"></i>', ['/trayek/delete', 'id' =>$db['id_trayek']], [
                    'class' => 'btn btn-danger btn-xs',
                    'data' => [
                    'confirm' => 'anda yakin ingin menghapus "'.$db['nama_trayek']. '"?',
                    'method' => 'post', 
                    ]
                    ]); ?>

             </center></td>
          </tr>

            <?php $no++;endforeach; ?>

          </tbody>
        </table>           
       </div>         
     </div>    


</div>
