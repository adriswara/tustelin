<?php

namespace App\Models;

use CodeIgniter\Model;

class FotoModel extends Model
{
    protected $table = 'kepemilikanalat';
    protected $primaryKey = 'id_milikAlat';
    protected $allowedFields = ['id_milikAlat', 'id_fotografer', 'id_alat'
        /** , 'user_created_at' */
    ];
}
