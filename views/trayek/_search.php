<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TrayekSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="trayek-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_trayek') ?>

    <?= $form->field($model, 'id_perusahaan') ?>

    <?= $form->field($model, 'nama_trayek') ?>

    <?= $form->field($model, 'asal') ?>

    <?= $form->field($model, 'tujuan') ?>

    <?php // echo $form->field($model, 'id_jadwal') ?>

    <?php // echo $form->field($model, 'grid_rute') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
