<?php

namespace App\Models;

use CodeIgniter\Model;

class KotaModel extends Model
{
    protected $table = 'kota';
    protected $allowedFields = ['nama_kota'
        /** , 'user_created_at' */
    ];
}
