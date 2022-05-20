<?php

namespace App\Models;

use CodeIgniter\Model;

class AliranKomersilModel extends Model
{
    protected $table      = 'aliran_komersil';
    protected $primaryKey = 'id_komersil';
    protected $allowedFields = ['nama_aliran'
        /** , 'user_created_at' */
    ];

    public function join()
    {
        return $this->table('aliran_komersil')->join('fotografer', 'aliran_komersil.id_komersil = fotografer.id_komersil');
    }
}
