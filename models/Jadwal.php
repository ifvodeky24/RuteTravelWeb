<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_jadwal".
 *
 * @property int $id_jadwal
 * @property string $jam
 * @property string $hari
 * @property string $created_at
 * @property string $updated_at
 *
 * @property TbTrayek[] $tbTrayeks
 */
class Jadwal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_jadwal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jam', 'hari'], 'required'],
            [['jam', 'hari'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_jadwal' => 'Id Jadwal',
            'jam' => 'Jam',
            'hari' => 'Hari',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[TbTrayeks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTrayek()
    {
        return $this->hasMany(Trayek::className(), ['id_jadwal' => 'id_jadwal']);
    }
}
