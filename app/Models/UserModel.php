<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'pelanggan';
    protected $primaryKey = 'id_pelanggan';
    protected $allowedFields = ['username_pengguna', 'email_pengguna', 'sandi_pengguna'
        /** , 'user_created_at' */
    ];
}
