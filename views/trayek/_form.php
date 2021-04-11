<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Jadwal;


/* @var $this yii\web\View */
/* @var $model app\models\Trayek */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="trayek-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_trayek')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'asal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tujuan')->textInput(['maxlength' => true]) ?>

    <?php
    $jadwal = ArrayHelper::map(Jadwal::find()->all(), 'id_jadwal', 'jam', 'hari');
    echo $form->field($model, 'id_jadwal')->dropDownList($jadwal, ['prompt' => 'Pilih Jadwal....'])->label('Jadwal Keberangkatan');
    ?>

    <?= $form->field($model, 'latitude_asal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'longitude_asal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'latitude_tujuan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'longitude_tujuan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Aktif' => 'Aktif', 'Tidak Aktif' => 'Tidak Aktif', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
