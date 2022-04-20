<?php

namespace App\Models;

use CodeIgniter\Model;

class FotograferModel extends Model
{
    protected $table      = 'fotografer';
    protected $primaryKey = 'id_fotografer';

    public function getFotografer($slug = false)
    {
        $querry = $this->joinkomersil();


        if ($slug == false) {
            return $this->joinkomersil();
        }
        return $this->table('fotografer')->join('aliran_komersil', 'fotografer.id_komersil = aliran_komersil.id_komersil', 'inner')->join('alat', 'fotografer.id_alat = alat.id_alat', 'inner')->select('slug, nama, displaypic, nama_aliran,nama_alat, harga, akun_instagram,email,no_telfon,no_rekening')->where(['slug' => $slug])->first();
    }
    public function search($keyword)
    {
        return $this->table('fotografer')->like('nama', $keyword)->orLike('akun_instagram', $keyword);
    }

    public function joinkomersil()
    {
        return $this->table('fotografer')->join('aliran_komersil', 'fotografer.id_komersil = aliran_komersil.id_komersil', 'inner')->join('alat', 'fotografer.id_alat = alat.id_alat', 'inner')->select('slug, nama, displaypic, nama_aliran,nama_alat, harga, akun_instagram')->get();
    }
}
