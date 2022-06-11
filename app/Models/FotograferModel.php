<?php

namespace App\Models;

use CodeIgniter\Model;

class FotograferModel extends Model
{
    protected $table      = 'fotografer';
    protected $primaryKey = 'id_fotografer';
    protected $allowedFields = ['nama', 'slug', 'displaypic', 'akun_instagram', 'rataRata_rating', 'jumlah_rating', 'kepemilikan_studio', 'deskripsi', 'ktp'];


    public function getidBySlug($slug = false)
    {
        return $this->table('fotografer')->select('id_fotografer, slug')->where(['slug' => $slug])->first();
    }

    public function getFotografer($id = false)
    {
        $querry = $this->joinMarket();


        if ($id == false) {
            return $this->joinMarket();
        }

        return $this->table('fotografer')->select('id_fotografer,slug, nama, displaypic, harga, akun_instagram,email,no_telfon,no_rekening')->where(['id_fotografer' => $id])->first();
    }

    // -- QUERRY BUAT NAMPILIN PAS KLIK PROFIL -- //
    public function getProfil($slug = false)
    {
        $querry = $this->joinkomersil();


        if ($slug == false) {
            return $this->joinkomersil();
        }


        // d($this->table('fotografer')->join('aliran_komersil', 'fotografer.id_komersil = aliran_komersil.id_komersil', 'inner')->join('alat', 'fotografer.id_alat = alat.id_alat', 'inner')->join('review', 'fotografer.id_fotografer = review.id_fotografer', 'left')->join('pelanggan', 'pelanggan.id_pengguna = review.id_pengguna', 'left')->where(['slug' => $slug])->get()->getResultArray());

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

        return $this->table('fotografer')->join('aliran_komersil', 'fotografer.id_komersil = aliran_komersil.id_komersil', 'outter')->join('alat', 'fotografer.id_alat = alat.id_alat', 'outter')->join('kota', 'fotografer.id_kota = kota.id_kota', 'outter')->join('review', 'fotografer.id_fotografer = review.id_fotografer', 'left')->select('slug, nama, displaypic, nama_aliran,nama_alat, harga, akun_instagram,email,no_telfon,no_rekening, nama_kota ,deskripsi, review,rating,waktu_kirim,rataRata_rating,jumlah_rating')->get();
    }

    public function joinMarket()
    {
        // return $this->table('fotografer')->join('aliran_komersil', 'fotografer.id_komersil = aliran_komersil.id_komersil', 'inner')->join('alat', 'fotografer.id_alat = alat.id_alat', 'inner')->join('review', 'fotografer.id_fotografer = review.id_fotografer')->select('slug, nama, displaypic, nama_aliran,nama_alat, harga, akun_instagram,email,no_telfon,no_rekening, review,rating,waktu_kirim')->get();


        d($this->table('fotografer')->join('aliran_komersil', 'fotografer.id_komersil = aliran_komersil.id_komersil', 'outter')->join('alat', 'fotografer.id_alat = alat.id_alat', 'outter')->join('kota', 'fotografer.id_kota = kota.id_kota', 'outter')->select('slug, nama, displaypic, nama_aliran,nama_alat, harga, akun_instagram,email,no_telfon,no_rekening, nama_kota ,rataRata_rating,jumlah_rating')->get());

        return $this->table('fotografer')->join('aliran_komersil', 'fotografer.id_komersil = aliran_komersil.id_komersil', 'outter')->join('alat', 'fotografer.id_alat = alat.id_alat', 'outter')->join('kota', 'fotografer.id_kota = kota.id_kota', 'outter')->select('slug, nama, displaypic, nama_aliran,nama_alat, harga, akun_instagram,email,no_telfon,no_rekening, nama_kota ,rataRata_rating,jumlah_rating')->get();
    }

    public function filter($filter_aliran = null, $filter_kota = null, $filter_harga = null, $filter_rating = null, $filter_jmlRating = null)
    {
        $result = null;
        $arrFilterAliran = array();
        $arrFilterKota = array();
        $outputFilterHarga = null;
        // merubah string filter aliran dari string ke array
        if (is_string($filter_aliran)) {
            $arrFilterAliran = array($filter_aliran);
        } else if (is_array($filter_aliran)) {
            $arrFilterAliran = $filter_aliran;
        }
        if (is_string($filter_kota)) {
            $arrFilterKota = array($filter_kota);
        } else if (is_array($filter_kota)) {
            $arrFilterKota = $filter_kota;
        }
        if (is_string($filter_harga)) {
            $arrFilterHarga = array($filter_harga);
        }



        $result =  $this->table('fotografer')->join('aliran_komersil', 'fotografer.id_komersil = aliran_komersil.id_komersil', 'outter')->join('alat', 'fotografer.id_alat = alat.id_alat', 'outter')->join('kota', 'fotografer.id_kota = kota.id_kota', 'outter')->select('slug, nama, displaypic, nama_aliran,nama_alat, harga, akun_instagram,email,no_telfon,no_rekening, nama_kota ,rataRata_rating,jumlah_rating');



        if (strcmp($filter_harga, 'filterHargaA') == 0) {
            $result = $result->where('harga <',  1000000);
            d('filter a masuk');
        } elseif (strcmp($filter_harga, 'filterHargaB') == 0) {
            $result  = $result->where('harga >',  1000000)->where('harga <', 2000000);
            d('filter b masuk');
        } elseif (strcmp($filter_harga, 'filterHargaC') == 0) {
            $result  = $result->where('harga >',  2000000)->where('harga <', 3000000);
            d('filter c masuk');
        } elseif (strcmp($filter_harga, 'filterHargaD') == 0) {
            $result  = $result->where('harga >',  3000000)->where('harga <', 4000000);
            d('filter d masuk');
        } elseif (strcmp($filter_harga, 'filterHargaE') == 0) {
            $result = $result->where('harga >',  5000000);
            d('filter e masuk');
        }


        if (strcmp($filter_rating, 'filterRating2') == 0) {
            $result = $result->where('rataRata_rating >=',  1)->where('rataRata_rating <', 2);
            d('filter a masuk');
        } elseif (strcmp($filter_rating, 'filterRating2') == 0) {
            $result = $result->where('rataRata_rating >=',  2)->where('rataRata_rating <', 2);
            d('filter b masuk');
        } elseif (strcmp($filter_rating, 'filterRating3') == 0) {
            $result = $result->where('rataRata_rating >=',  3)->where('rataRata_rating <', 2);
            d('filter c masuk');
        } elseif (strcmp($filter_rating, 'filterRating4') == 0) {
            $result = $result->where('rataRata_rating >=',  4)->where('rataRata_rating <', 2);
            d('filter d masuk');
        } elseif (strcmp($filter_rating, 'filterRating5') == 0) {
            $result = $result->where('rataRata_rating >=',  5);
            d('filter e masuk');
        }


        if (strcmp($filter_jmlRating, 'filterJmlRating1') == 0) {
            $result = $result->where('jumlah_rating <=',  10);
            d('filter a masuk');
        } elseif (strcmp($filter_jmlRating, 'filterJmlRating2') == 0) {
            $result = $result->where('jumlah_rating >=',  10)->where('jumlah_rating <', 100);
            d('filter b masuk');
        } elseif (strcmp($filter_jmlRating, 'filterJmlRating3') == 0) {
            $result = $result->where('jumlah_rating >=',  100);
            d('filter c masuk');
        }


        if ($filter_aliran != null) {
            $result = $result->whereIn('nama_aliran', $arrFilterAliran);
        }


        if ($filter_kota != null) {
            $result = $result->whereIn('nama_kota', $arrFilterKota);
        }

        $result = $result->get()->getResultArray();


        return $result;
    }
}

// ->whereIn('nama_aliran', $arrFilterAliran[0])->wherein('nama_kota', $arrFilterKota[0]);



// BACKUP SEMENTARA MODEL BERHASIL 2 FILTER TAPI TOMBOL FAIL

// public function filter($filter_aliran = null, $filter_kota = null)
//---------------------------------------------------------------------
// {
//     $result = null;
//     $arrFilterAliran = array();
//     $arrFilterKota = array();
//     // merubah string filter aliran dari string ke array
//     if (is_string($filter_aliran)) {
//         $arrFilterAliran[0] = explode(',', $filter_aliran, '1');
//     } else if (is_array($filter_aliran)) {
//         $arrFilterAliran = $filter_aliran;
//     }

//     if (is_string($filter_kota)) {


//         $arrFilterKota[0] = explode(',', $filter_kota, '1');
//     } else if (is_array($filter_kota)) {
//         $arrFilterKota = $filter_kota;
//     }
//     // dd($result);
//     $result =  $this->table('fotografer')->join('aliran_komersil', 'fotografer.id_komersil = aliran_komersil.id_komersil', 'outter')->join('alat', 'fotografer.id_alat = alat.id_alat', 'outter')->join('kota', 'fotografer.id_kota = kota.id_kota', 'outter')->select('slug, nama, displaypic, nama_aliran,nama_alat, harga, akun_instagram,email,no_telfon,no_rekening, nama_kota ,rataRata_rating,jumlah_rating');

//     if ($filter_aliran != null) {
//         $result = $result->whereIn('nama_aliran', $arrFilterAliran);
//     }

//     // d($arrFilterAliran);
//     if ($filter_kota != null) {
//         $result = $result->whereIn('nama_kota', $arrFilterKota);
//         // d('msk');
//     }
//     // dd($arrFilterKota);
//     return $result->get()->getResultArray();
// }
//----------------------------------------------------------------------------------------------------------------------