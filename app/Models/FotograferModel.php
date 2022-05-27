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

    // -- QUERRY BUAT NAMPILIN PAS KLIK PROFIL -- //
    public function getProfil($slug = false)
    {
        $querry = $this->joinkomersil();


        if ($slug == false) {
            return $this->joinkomersil();
        }

        // dd($this->table('fotografer')->join('aliran_komersil as kategori', 'fotografer.id_komersil = kategori.id_komersil', 'inner')->join('alat as equipment', 'fotografer.id_alat = equipment.id_alat', 'inner')->join('review as masukan', 'fotografer.id_fotografer = masukan.id_fotografer', 'left')->join('pelanggan as user', 'user.id_pengguna = masukan.id_pengguna', 'left')->where(['slug' => $slug])->first());

        // dd($this->table('fotografer')->join('aliran_komersil as kategori', 'fotografer.id_komersil = kategori.id_komersil', 'inner')->join('alat as equipment', 'fotografer.id_alat = equipment.id_alat', 'inner')->join('review as masukan', 'fotografer.id_fotografer = masukan.id_fotografer', 'left')->join('pelanggan as user', 'user.id_pengguna = masukan.id_pengguna', 'left')->where(['slug' => $slug])->get()->getResult());

        return $this->table('fotografer')->join('aliran_komersil as kategori', 'fotografer.id_komersil = kategori.id_komersil', 'inner')->join('alat as equipment', 'fotografer.id_alat = equipment.id_alat', 'inner')->join('review as masukan', 'fotografer.id_fotografer = masukan.id_fotografer', 'left')->join('pelanggan as user', 'user.id_pengguna = masukan.id_pengguna', 'left')->where(['slug' => $slug])->get()->getResultArray();
    }
    // -- QUERRY BUAT NAMPILIN DI SEARCH --//
    public function search($keyword)
    {
        // d($this->table('fotografer')->join('aliran_komersil as komersil', 'fotografer.id_komersil = komersil.id_komersil', 'inner')->like('nama', $keyword)->orLike('akun_instagram', $keyword)->get()->getResult());

        // return $this->table('fotografer')->join('aliran_komersil as komersil', 'fotografer.id_komersil = aliran_komersil.id_komersil', 'inner')->select("slug, nama, displaypic, nama_aliran, harga, akun_instagram,email,no_telfon,no_rekening");

        // return $this->table('fotografer')->like('nama', $keyword)->orLike('akun_instagram', $keyword);

        return $this->table('fotografer')->join('aliran_komersil as komersil', 'fotografer.id_komersil = komersil.id_komersil', 'inner')->join('kota as kotaasal', 'fotografer.id_kota = kotaasal.id_kota', 'inner')->like('nama', $keyword)->orLike('akun_instagram', $keyword)->orLike('nama_aliran', $keyword)->orLike('nama_kota', $keyword)->get()->getResultArray();
    }

    //-- QUERRY BUAT NAMPILIN DI MARKETPLACE PAGE --//
    public function joinkomersil()
    {
        // return $this->table('fotografer')->join('aliran_komersil', 'fotografer.id_komersil = aliran_komersil.id_komersil', 'inner')->join('alat', 'fotografer.id_alat = alat.id_alat', 'inner')->join('review', 'fotografer.id_fotografer = review.id_fotografer')->select('slug, nama, displaypic, nama_aliran,nama_alat, harga, akun_instagram,email,no_telfon,no_rekening, review,rating,waktu_kirim')->get();

        return $this->table('fotografer')->join('aliran_komersil', 'fotografer.id_komersil = aliran_komersil.id_komersil', 'outter')->join('alat', 'fotografer.id_alat = alat.id_alat', 'outter')->join('kota', 'fotografer.id_kota = kota.id_kota', 'outter')->join('review', 'fotografer.id_fotografer = review.id_fotografer', 'left')->select('slug, nama, displaypic, nama_aliran,nama_alat, harga, akun_instagram,email,no_telfon,no_rekening, nama_kota , review,rating,waktu_kirim')->get();
    }
}
