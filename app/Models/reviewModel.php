<?php

namespace App\Models;

use CodeIgniter\Model;

class ReviewModel extends Model
{
    protected $table = 'review';
    protected $primaryKey = 'id_review';
    protected $allowedFields = ['id_pengguna', 'review', 'rating', 'waktu_kirim'
        /** , 'user_created_at' */
    ];
}
