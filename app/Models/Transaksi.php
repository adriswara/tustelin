<?php

namespace App\Models;

use CodeIgniter\Model;

class Transaksi extends Model
{
    protected $table = 'kepemilikanalat';
    protected $primaryKey = 'id_milikAlat';
    protected $allowedFields = ['id_milikAlat', 'id_fotografer', 'id_alat'
        /** , 'user_created_at' */
    ];
    public function getTransaksi($id = false)
    {

        return $this->table('kepemilikanalat')->select('id_milikAlat, id_fotografer,id_alat')->where(['id_milikAlat' => $id])->first();
    }
}
