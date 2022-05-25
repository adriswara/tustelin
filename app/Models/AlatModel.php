<?php

namespace App\Models;

use CodeIgniter\Model;

class AlatModel extends Model
{
    protected $table      = 'alat';
    protected $primaryKey = 'id_alat';
    protected $allowedFields = ['nama_alat', 'merek', 'jenis'
        /** , 'user_created_at' */
    ];

    public function getAlat($id = false)
    {

        return $this->table('alat')->select('id_alat, nama_alat, merek, jenis')->where(['id_alat' => $id])->first();
    }
}
