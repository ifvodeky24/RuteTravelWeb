<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Trayek */

$this->title = 'Tambah Data Trayek';
$this->params['breadcrumbs'][] = ['label' => 'Data Trayek', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trayek-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
