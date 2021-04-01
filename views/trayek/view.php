<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Trayek */

$this->title = $model->id_trayek;
$this->params['breadcrumbs'][] = ['label' => 'Trayeks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="trayek-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Perbarui', ['update', 'id' => $model->id_trayek], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Hapus', ['delete', 'id' => $model->id_trayek], [
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
            'id_trayek',
            'nama_trayek',
            'asal',
            'tujuan',
            [
                'label'=>'Jam',
                'format'=>'raw',
                'value' => function($data){
                    $sql = (new \Yii\db\query())
                            ->select('*')
                            ->from('tb_jadwal')
                            ->where(['id_jadwal' => $data['id_jadwal']])
                            ->one();
                    
                    return $sql['jam'];
                }
            ],
            [
                'label'=>'Hari',
                'format'=>'raw',
                'value' => function($data){
                    $sql = (new \Yii\db\query())
                            ->select('*')
                            ->from('tb_jadwal')
                            ->where(['id_jadwal' => $data['id_jadwal']])
                            ->one();
                    
                    return $sql['hari'];
                }
            ],
            'grid_rute',
            'status',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
