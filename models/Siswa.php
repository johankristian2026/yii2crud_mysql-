<?php

namespace app\models;

use yii\db\ActiveRecord;

class Siswa extends ActiveRecord
{
    public static function tableName()
    {
        return 'tbl_siswa'; // nama tabel di database
    }

    public function rules()
    {
        return [
            [['nama', 'kelas', 'alamat'], 'required'],
            [['nama', 'kelas', 'alamat'], 'string', 'max' => 100],
        ];
    }
}