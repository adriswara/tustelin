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
}
