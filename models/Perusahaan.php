<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_perusahaan".
 *
 * @property int $id_perusahaan
 * @property int $id_trayek
 * @property string $nama_perusahaan
 * @property string $foto
 * @property string $pimpinan
 * @property string $nomor_handphone
 * @property string $alamat_perusahaan
 * @property string $website
 * @property string $facebook
 * @property string $instagram
 * @property string $created_at
 * @property string $updated_at
 *
 * @property TbTrayek $trayek
 */
class Perusahaan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_perusahaan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_trayek', 'nama_perusahaan', 'foto', 'pimpinan', 'nomor_handphone', 'alamat_perusahaan', 'website', 'facebook', 'instagram'], 'required'],
            [['id_trayek'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['nama_perusahaan', 'foto', 'pimpinan', 'website', 'facebook', 'instagram'], 'string', 'max' => 30],
            [['nomor_handphone', 'alamat_perusahaan'], 'string', 'max' => 50],
            [['id_trayek'], 'exist', 'skipOnError' => true, 'targetClass' => Trayek::className(), 'targetAttribute' => ['id_trayek' => 'id_trayek']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_perusahaan' => 'Id Perusahaan',
            'id_trayek' => 'Id Trayek',
            'nama_perusahaan' => 'Nama Perusahaan',
            'foto' => 'Foto',
            'pimpinan' => 'Pimpinan',
            'nomor_handphone' => 'Nomor Handphone',
            'alamat_perusahaan' => 'Alamat Perusahaan',
            'website' => 'Website',
            'facebook' => 'Facebook',
            'instagram' => 'Instagram',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Trayek]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTrayek()
    {
        return $this->hasOne(Trayek::className(), ['id_trayek' => 'id_trayek']);
    }
}
