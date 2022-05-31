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

    public function avgReview($id = false)
    {
        return $this->table('review')->selectAVG('review.rating')->where(['review.id_fotografer ' => $id])->get()->getResult();
    }

    public function sumReview($id = false)
    {

        $builder = $this->table('review')->select('review.rating')->where(['review.id_fotografer ' => $id])->get()->getResult();
        d(count($builder));
        //  dd($builder->countAllResults());
        return count($builder);
    }
}
