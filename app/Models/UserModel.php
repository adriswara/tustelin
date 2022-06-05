<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'pelanggan';
    protected $primaryKey = 'id_pengguna';
    protected $allowedFields = ['username_pengguna', 'email_pengguna', 'sandi_pengguna'
        /** , 'user_created_at' */
    ];

    public function getUser($id = false)
    {

        return $this->table('pelanggan')->select('id_pengguna, username_pengguna,email_pengguna,sandi_pengguna')->where(['id_pengguna' => $id])->first();
    }
    public function getidbyUsername($username = false)
    {
        return $this->table('pelanggan')->select('id_pengguna,username_pengguna')->where(['username_pengguna' => $username])->first();
    }
}
