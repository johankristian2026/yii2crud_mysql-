<?php

namespace app\models;

use yii\db\ActiveRecord;

class Admin extends ActiveRecord
{
    public static function tableName()
    {
        return 'tbl_admin'; // nama tabel di database
    }

    public function rules()
    {
        return [
            [['user', 'password'], 'required'],
            [['user', 'password'], 'string', 'max' => 100],
        ];
    }
}