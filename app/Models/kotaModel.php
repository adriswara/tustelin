<?php

namespace App\Models;

use CodeIgniter\Model;

class KotaModel extends Model
{
    protected $table = 'kota';
    protected $primary = 'id_kota';
    protected $allowedFields = ['nama_kota'
        /** , 'user_created_at' */
    ];

    public function getKota($id = false)
    {

        return $this->table('kota')->select('id_kota, nama_kota')->where(['id_kota' => $id])->first();
    }
}
