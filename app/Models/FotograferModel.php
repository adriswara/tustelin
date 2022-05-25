<?php

namespace App\Models;

use CodeIgniter\Model;

class FotograferModel extends Model
{
    protected $table      = 'fotografer';
    protected $primaryKey = 'id_fotografer';
    protected $allowedFields = ['nama', 'slug', 'displaypic', 'akun_instagram'];

    public function getFotografer($id = false)
    {
        $querry = $this->joinkomersil();


        if ($id == false) {
            return $this->joinkomersil();
        }
        d($this->table('fotografer')->select('id_fotografer,slug, nama, displaypic, harga, akun_instagram,email,no_telfon,no_rekening')->where(['id_fotografer' => $id])->first());
        return $this->table('fotografer')->select('id_fotografer,slug, nama, displaypic, harga, akun_instagram,email,no_telfon,no_rekening')->where(['id_fotografer' => $id])->first();
        // return $this->table('fotografer')->join('aliran_komersil', 'fotografer.id_komersil = aliran_komersil.id_komersil', 'inner')->join('alat', 'fotografer.id_alat = alat.id_alat', 'inner')->select('slug, nama, displaypic, nama_aliran,nama_alat, harga, akun_instagram,email,no_telfon,no_rekening')->where(['slug' => $slug])->first();
    }

    public function getProfil($slug = false)
    {
        $querry = $this->joinkomersil();


        if ($slug == false) {
            return $this->joinkomersil();
        }


        return $this->table('fotografer')->join('aliran_komersil', 'fotografer.id_komersil = aliran_komersil.id_komersil', 'inner')->join('alat', 'fotografer.id_alat = alat.id_alat', 'inner')->select('slug, nama, displaypic, nama_aliran,nama_alat, harga, akun_instagram,email,no_telfon,no_rekening')->where(['slug' => $slug])->first();
    }

    public function search($keyword)
    {
        // d($this->table('fotografer')->join('aliran_komersil as komersil', 'fotografer.id_komersil = komersil.id_komersil', 'inner')->like('nama', $keyword)->orLike('akun_instagram', $keyword)->get()->getResult());

        // return $this->table('fotografer')->join('aliran_komersil as komersil', 'fotografer.id_komersil = aliran_komersil.id_komersil', 'inner')->select("slug, nama, displaypic, nama_aliran, harga, akun_instagram,email,no_telfon,no_rekening");

        // return $this->table('fotografer')->like('nama', $keyword)->orLike('akun_instagram', $keyword);

        return $this->table('fotografer')->join('aliran_komersil as komersil', 'fotografer.id_komersil = komersil.id_komersil', 'inner')->like('nama', $keyword)->orLike('akun_instagram', $keyword)->orLike('nama_aliran', $keyword)->get()->getResultArray();
    }

    public function joinkomersil()
    {
        return $this->table('fotografer')->join('aliran_komersil', 'fotografer.id_komersil = aliran_komersil.id_komersil', 'inner')->join('alat', 'fotografer.id_alat = alat.id_alat', 'inner')->select('slug, nama, displaypic, nama_aliran,nama_alat, harga, akun_instagram')->get();
    }
}
