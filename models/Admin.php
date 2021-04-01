<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_admin".
 *
 * @property int $id_admin
 * @property string $username
 * @property string $password
 * @property string $nama_lengkap
 * @property string $foto
 * @property string $authKey
 * @property string $accesToken
 * @property string $created_at
 * @property string $updated_at
 */
class Admin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_admin';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password', 'nama_lengkap', 'foto', 'authKey', 'accesToken'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['username', 'nama_lengkap', 'foto', 'authKey', 'accesToken'], 'string', 'max' => 30],
            [['password'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_admin' => 'Id Admin',
            'username' => 'Username',
            'password' => 'Password',
            'nama_lengkap' => 'Nama Lengkap',
            'foto' => 'Foto',
            'authKey' => 'Auth Key',
            'accesToken' => 'Acces Token',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
