<?php

namespace App\Models;

use CodeIgniter\Model;

class PemesananModel extends Model
{
    protected $table = 'pemesanan';
    protected $primaryKey = 'id_pemesanan';
    protected $allowedFields = ['id_pemesanan', 'id_pengguna', 'id_fotografer', 'jumlah_hari', 'keterangan', 'waktu_pesan', 'status_pemesanan', 'ulasan', 'rating'
        /** , 'user_created_at' */
    ];
    public function getPemesanan($id = false)
    {

        return $this->table('pemesanan')->select('id_pemesanan, id_pengguna,id_fotografer,jumlah_hari,keterangan,waktu_pesan,ulasan,rating')->where(['id_pemesanan' => $id])->first();
    }

    public function getPemesananbyIDFotografer($id = false)
    {

        return $this->table('pemesanan')->select('id_pemesanan, id_pengguna,id_fotografer,jumlah_hari,keterangan,waktu_pesan,ulasan,rating')->where(['id_fotografer' => $id])->first();
    }

    public function getPemesananByName($username = false)
    {
        return $this->table('pemesanan')->join('fotografer as pemberi', 'pemberi.id_fotografer = pemesanan.id_fotografer', 'inner')->join('pelanggan as pemesan', 'pemesan.id_pengguna = pemesanan.id_fotografer')->where(['username_fotografer' => $username])->get()->getResultArray();
    }

    public function getPemesananByPelanggan($username = false)
    {
        return $this->table('pemesanan')->join('fotografer as pemberi', 'pemberi.id_fotografer = pemesanan.id_fotografer', 'inner')->join('pelanggan as pemesan', 'pemesan.id_pengguna = pemesanan.id_fotografer')->where(['username_Pengguna' => $username])->get()->getResultArray();
    }
    public function getPemesananBySlug($slug = false)
    {
        return $this->table('pemesanan')->join('fotografer as pemberi', 'pemberi.id_fotografer = pemesanan.id_fotografer', 'left')->join('pelanggan as pemesan', 'pemesan.id_pengguna = pemesanan.id_pengguna')->where(['slug' => $slug])->get()->getResultArray();
    }
    public function avgReview($id = false)
    {
        return $this->table('pemesanan')->selectAVG('pemesanan.rating')->where(['pemesanan.id_fotografer ' => $id])->get()->getResult();
    }

    public function sumReview($id = false)
    {

        $builder = $this->table('pemesanan')->select('pemesanan.rating')->where(['pemesanan.id_fotografer ' => $id])->get()->getResult();
        d(count($builder));
        return count($builder);
    }
}
