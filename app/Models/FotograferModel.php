<?php

namespace App\Models;

use CodeIgniter\Model;

class FotograferModel extends Model
{
    protected $table      = 'fotografer';
    protected $primaryKey = 'id_fotografer';

    public function getFotografer($slug = false)
    {



        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }

    public function search($keyword)
    {
        return $this->table('fotografer')->like('nama', $keyword)->orLike('akun_instagram', $keyword);
    }

    public function joinkomersil()
    {
        return $this->table('fotografer')->join('aliran_komersil', 'fotografer.id_komersil = aliran_komersil.id_komersil', 'inner')->select('slug, nama, displaypic, nama_aliran, harga, akun_instagram')->get();
    }
}
