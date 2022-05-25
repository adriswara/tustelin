<?php

namespace App\Models;

use CodeIgniter\Model;

class ReviewModel extends Model
{
    protected $table = 'review';
    protected $primaryKey = 'id_review';
    protected $allowedFields = ['id_pengguna', 'id_fotografer', 'review', 'rating', 'waktu_kirim'
        /** , 'user_created_at' */
    ];

    public function getReview($id = false)
    {

        return $this->table('review')->select('id_review, id_fotografer, id_pengguna, review, rating, waktu_kirim')->where(['id_review' => $id])->first();
    }
}
