<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_trayek".
 *
 * @property int $id_trayek
 * @property string $nama_trayek
 * @property string $asal
 * @property string $tujuan
 * @property int $id_jadwal
 * @property string $grid_rute
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 *
 * @property TbPerusahaan[] $tbPerusahaans
 * @property TbJadwal $jadwal
 */
class Trayek extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_trayek';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_trayek', 'asal', 'tujuan', 'id_jadwal', 'grid_rute', 'status'], 'required'],
            [['id_jadwal'], 'integer'],
            [['status'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['nama_trayek', 'asal', 'tujuan', 'grid_rute'], 'string', 'max' => 30],
            [['id_jadwal'], 'exist', 'skipOnError' => true, 'targetClass' => Jadwal::className(), 'targetAttribute' => ['id_jadwal' => 'id_jadwal']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_trayek' => 'Id Trayek',
            'nama_trayek' => 'Nama Trayek',
            'asal' => 'Asal',
            'tujuan' => 'Tujuan',
            'id_jadwal' => 'Id Jadwal',
            'grid_rute' => 'Grid Rute',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[TbPerusahaans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTbPerusahaans()
    {
        return $this->hasMany(Perusahaan::className(), ['id_trayek' => 'id_trayek']);
    }

    /**
     * Gets query for [[Jadwal]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJadwal()
    {
        return $this->hasOne(Jadwal::className(), ['id_jadwal' => 'id_jadwal']);
    }
}
