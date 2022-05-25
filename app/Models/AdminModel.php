<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'admin';
    protected $primaryKey = 'id_admin';
    protected $allowedFields = ['username_admin', 'email_admin', 'password_admin'
        /** , 'user_created_at' */
    ];

    public function getAdmin($id = false)
    {
        return $this->table('admin')->select('id_admin, username_admin, password_admin, email_admin')->where(['id_admin' => $id])->first();
    }
}
