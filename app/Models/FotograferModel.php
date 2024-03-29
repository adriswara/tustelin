<?php

namespace App\Models;

use CodeIgniter\Model;

class FotograferModel extends Model
{
    protected $table      = 'fotografer';
    protected $primaryKey = 'id_fotografer';
    protected $allowedFields = ['nama', 'slug', 'displaypic', 'akun_instagram', 'rataRata_rating', 'jumlah_rating', 'kepemilikan_studio', 'deskripsi', 'ktp', 'id_alat', 'id_komersil', 'email_fotografer', 'harga', 'id_kota', 'alamat', 'no_telfon'];


    public function getidBySlug($slug = false)
    {
        return $this->table('fotografer')->select('id_fotografer, slug')->where(['slug' => $slug])->first();
    }
    public function getSlugByName($username_fotografer = false)
    {
        return $this->table('fotografer')->select('username_fotografer, slug')->where(['username_fotografer' => $username_fotografer])->get()->getResultArray();
    }

    public function getFotografer($id = false)
    {
        $querry = $this->joinMarket();


        if ($id == false) {
            return $this->joinMarket();
        }

        return $this->table('fotografer')->select('id_fotografer,slug, nama, displaypic, harga, akun_instagram,email_fotografer,no_telfon,no_rekening,alamat,deskripsi,sandi_fotografer,username_fotografer')->where(['id_fotografer' => $id])->first();
    }

    public function getOnly($slug = false)
    {
        return $this->table('fotografer')->where(['slug' => $slug])->get()->getResultArray();
    }
    public function getKepemilikan($slug = false)
    {
        return  $this->table('fotografer')->join('kepemilikanalat as alatlain', 'alatlain.id_fotografer = fotografer.id_fotografer', 'inner')->join('alat as equipment', 'alatlain.id_alat = equipment.id_alat', 'inner')->where(['slug' => $slug])->get()->getResultArray();
    }

    public function getFotoByProfile($slug = false)
    {

        return $this->table('fotografer')->join('foto as fotoGallery', 'fotoGallery.id_fotografer = fotografer.id_fotografer', 'inner')->where(['slug' => $slug])->get()->getResultArray();
    }
    // -- QUERRY BUAT NAMPILIN PAS KLIK PROFIL -- //
    public function getProfil($slug = false)
    {
        $querry = $this->joinkomersil();


        if ($slug == false) {
            return $this->joinkomersil();
        }



        return $this->table('fotografer')->join('aliran_komersil as kategori', 'fotografer.id_komersil = kategori.id_komersil', 'inner')->join('alat as equipment', 'fotografer.id_alat = equipment.id_alat', 'inner')->join('review as masukan', 'fotografer.id_fotografer = masukan.id_fotografer', 'left')->join('pelanggan as user', 'user.id_pengguna = masukan.id_pengguna', 'left')->join('foto as hasilFoto', 'hasilFoto.id_fotografer = fotografer.id_fotografer', 'inner')->where(['slug' => $slug])->get()->getResultArray();
    }

    public function getLoginProfile($username_fotografer)
    {
        return $this->table('fotografer')->where(['username_fotografer' => $username_fotografer])->get()->getResultArray();
    }

    // -- QUERRY BUAT NAMPILIN DI SEARCH --//
    public function search($keyword)
    {




        return $this->table('fotografer')->join('aliran_komersil as komersil', 'fotografer.id_komersil = komersil.id_komersil', 'inner')->join('kota as kotaasal', 'fotografer.id_kota = kotaasal.id_kota', 'inner')->like('nama', $keyword)->orLike('akun_instagram', $keyword)->orLike('nama_aliran', $keyword)->orLike('nama_kota', $keyword)->get()->getResultArray();
    }

    //-- QUERRY BUAT NAMPILIN DI MARKETPLACE PAGE --//
    public function joinkomersil()
    {

        return $this->table('fotografer')->join('aliran_komersil', 'fotografer.id_komersil = aliran_komersil.id_komersil', 'outter')->join('alat', 'fotografer.id_alat = alat.id_alat', 'outter')->join('kota', 'fotografer.id_kota = kota.id_kota', 'outter')->join('review', 'fotografer.id_fotografer = review.id_fotografer', 'left')->join('foto', 'fotografer.id_fotografer = foto.id_fotografer', 'outter')->select('slug, nama, displaypic, nama_aliran,nama_alat, harga, akun_instagram,email_fotografer,no_telfon,no_rekening, nama_kota ,deskripsi, review,rating,waktu_kirim,fotografer.rataRata_rating,fotografer.jumlah_rating,id_foto,file_foto,judul')->get();
    }

    public function joinMarket()
    {


        d($this->table('fotografer')->join('aliran_komersil', 'fotografer.id_komersil = aliran_komersil.id_komersil', 'outter')->join('alat', 'fotografer.id_alat = alat.id_alat', 'outter')->join('kota', 'fotografer.id_kota = kota.id_kota', 'outter')->select('slug, nama, displaypic, nama_aliran,nama_alat, harga, akun_instagram,email_fotografer,no_telfon,no_rekening, nama_kota ,rataRata_rating,jumlah_rating')->get());

        return $this->table('fotografer')->join('aliran_komersil', 'fotografer.id_komersil = aliran_komersil.id_komersil', 'outter')->join('alat', 'fotografer.id_alat = alat.id_alat', 'outter')->join('kota', 'fotografer.id_kota = kota.id_kota', 'outter')->select('slug, nama, displaypic, nama_aliran,nama_alat, harga, akun_instagram,email_fotografer,no_telfon,no_rekening, nama_kota ,rataRata_rating,jumlah_rating')->get();
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