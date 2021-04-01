<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_kondisi_jalan".
 *
 * @property int $id_kondisi_jalan
 * @property string $nama_lokasi
 * @property string $foto
 * @property string $tanggal
 * @property float $latitude
 * @property float $longitude
 * @property string $deskripsi
 * @property string $created_at
 * @property string $updated_at
 */
class KondisiJalan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_kondisi_jalan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_lokasi', 'foto', 'tanggal', 'latitude', 'longitude', 'deskripsi'], 'required'],
            [['tanggal', 'created_at', 'updated_at'], 'safe'],
            [['latitude', 'longitude'], 'number'],
            [['nama_lokasi', 'foto'], 'string', 'max' => 30],
            [['deskripsi'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kondisi_jalan' => 'Id Kondisi Jalan',
            'nama_lokasi' => 'Nama Lokasi',
            'foto' => 'Foto',
            'tanggal' => 'Tanggal',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
            'deskripsi' => 'Deskripsi',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
