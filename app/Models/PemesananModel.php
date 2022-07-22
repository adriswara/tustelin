<?php

namespace App\Models;

use CodeIgniter\Model;

class PemesananModel extends Model
{
    protected $table = 'pemesanan';
    protected $primaryKey = 'id_pemesanan';
    protected $allowedFields = ['id_pemesanan', 'id_pengguna', 'id_fotografer', 'jumlah_hari', 'keterangan', 'waktu_pesan'
        /** , 'user_created_at' */
    ];
    public function getPemesanan($id = false)
    {

        return $this->table('pemesanan')->select('id_pemesanan, id_pengguna,id_fotografer,jumlah_hari,keterangan,waktu_pesan')->where(['id_pemesanan' => $id])->first();
    }
    public function getPemesananByName($username = false)
    {
        return $this->table('pemesanan')->join('fotografer as pesanJasa', 'pesanJasa.id_fotografer = pemesanan.id_fotografer', 'inner')->where(['username_fotografer' => $username])->get()->getResultArray();
    }
}
