<?php

namespace App\Controllers;

use App\Models\AliranKomersilModel;
use App\Models\FotograferModel;
use App\Models\KotaModel;
use App\Models\ReviewModel;
use App\Models\UserModel;

class Profile extends BaseController
{
    protected $fotograferModel;
    public function __construct()
    {
        $this->fotograferModel = new FotograferModel();
        $this->alirankomersilModel = new AliranKomersilModel();
        $this->reviewModel = new ReviewModel();
        $this->kotaModel = new KotaModel();
        $this->controllerDatabase = new DatabaseTest();
        $this->userModel = new UserModel();
    }


    public function index()
    {

        $kriteria = $this->criteriaGetter();
        $keyword = $this->request->getVar('keyword');
        // $joins = $this->fotograferModel->join();
        if ($keyword) {
            $arrayResult = $this->fotograferModel->search($keyword);
        } else {
            //$arrayResult = $this->fotograferModel;
            $arraytemp = $this->fotograferModel->joinMarket()->getResult();
            $arrayResult = array();
            foreach ($arraytemp as $key) {
                $arrayResult[] = json_decode(json_encode($key), true);
            }
        }
        $data = [

            // 'fotografer' => $this->fotograferModel->getFotografer(),
            'title' => 'Daftar Fotografer',
            'fotografer' => $arrayResult,
            'kriteria' => $kriteria,
            'filter_aliran' => null,
            'filter_kota' => null,
            'filter_harga' => null,
            'filter_rating' => null,
            'filter_jmlRating' => null
        ];
        // $data = json_decode($data, true);

        //$fotograferModel = new \App\Models\FotograferModel();

        // return view('fotografer/index', $data); 
        return view('pages/marketplace_page', $data);

        //echo view('pages/marketplace_page', $data);
    }
    public function market_filter($filter_aliran = null, $filter_kota = null, $filter_harga = null, $filter_rating = null, $filter_jmlRating = null)
    {


        if ($filter_aliran == null) {
            $filter_aliran = $this->request->getVar('filter_aliran[]');
        }

        if ($filter_kota == null) {
            $filter_kota = $this->request->getVar('filter_kota[]');
        }


        if ($filter_harga == null) {
            $filter_harga = $this->request->getVar('filter_harga[]');
        }

        if ($filter_rating == null) {
            $filter_rating = $this->request->getVar('filter_rating[]');
        }

        if ($filter_jmlRating == null) {
            $filter_jmlRating = $this->request->getVar('filter_jmlRating[]');
        }



        $kriteria = $this->criteriaGetter();
        // if nya fingger crossed
        // if ($filter_kota) {
        //     $filterResult = $this->fotograferModel->filter($filter_kota);
        // }
        if ($filter_aliran || $filter_kota || $filter_harga || $filter_rating || $filter_jmlRating) {
            $filterResult = $this->fotograferModel->filter($filter_aliran, $filter_kota, $filter_harga, $filter_rating, $filter_jmlRating);
        } else {
            $arraytemp = $this->fotograferModel->joinMarket()->getResult();
            $filterResult = array();
            foreach ($arraytemp as $key) {
                $filterResult[] = json_decode(json_encode($key), true);
            }
        }
        $data = [

            'title' => 'Daftar Fotografer',
            // 'fotografer' => $this->fotograferModel->getFotografer(),
            'fotografer' => $filterResult,
            'kriteria' => $kriteria,
            'filter_aliran' => $filter_aliran,
            'filter_kota' => $filter_kota,
            'filter_harga' => $filter_harga,
            'filter_rating' => $filter_rating,
            'filter_jmlRating' => $filter_jmlRating

        ];



        return view('pages/marketplace_page', $data);
    }
    public function profileSegment($slug)
    {
        $kriteria = $this->criteriaGetter();
        $profil = $this->fotograferModel->getProfil($slug);
        $data = [
            'title' => 'Profil Fotografer',
            'kriteria' => $kriteria,
            'profil' => $this->fotograferModel->getProfil($slug)
        ];

        $this->session = session();

        $data['get_sess'] = $this->session->get('username_pengguna');
        $this->currSlug = $slug;
        // d($slug);
        // d($this->currSlug);
        // untuk exception not found

        if (empty($data['profil'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Fotografer' . $slug . 'tidak ditemukan');
        }

        return view('pages/profile_page', $data);
    }
    public function criteriaGetter()
    {
        $dataKota = $this->kotaModel->findAll();
        $dataAliran = $this->alirankomersilModel->findAll();

        $result = [

            // 'fotografer' => $this->fotograferModel->getFotografer(),
            'kota' => $dataKota,
            'aliran' => $dataAliran
        ];


        return $result;
    }

    //form masukan
    public function saveReview($slug = null)
    {
        $this->session = session();
        //butuh return method berdsasarkan slug
        //return select id where w=slug - slug
        $profilFotografer = $slug;
        $profilUser = $this->session->get('username_pengguna');

        $varIdFotografer = $this->fotograferModel->getidBySlug($profilFotografer);
        $varIdPelanggan = $this->userModel->getidbyUsername($profilUser);
        $this->reviewModel->save([
            'id_fotografer' => $varIdFotografer['id_fotografer'],
            'id_pengguna' => $varIdPelanggan['id_pengguna'],
            'review' => $this->request->getVar('review'),
            'rating' => 5


        ]);
        session()->setFlashdata('pesan', 'Input Review berhasil');
        //auto count rata rata dan riwayat
        $avgRating = $this->reviewModel->avgReview($this->request->getVar('id_fotografer'));
        $sumRating = $this->reviewModel->sumReview($this->request->getVar('id_fotografer'));
        $this->avgRatingFotografer($this->request->getVar('id_fotografer'), $avgRating);
        $this->sumRatingFotografer($this->request->getVar('id_fotografer'), $sumRating);
        //
        return redirect()->to('/databasetest');
    }

    //ini mungkin digabung
    public function createReview()
    {
        $this->session = session();
        $data = [
            'title' => 'Form Tambah Data Review',
            'validation' => \Config\Services::validation()
        ];
        $data['get_sess'] = $this->session->get('username_admin');
        return view('databasetest/createReview', $data);
    }
    //ininih

    public function avgRatingFotografer($id, $avgRating)
    {

        // d(json_decode($avgRating[0]->rating, true));
        // dd($avgRating);
        $this->fotograferModel->save([
            'id_fotografer' => $id,
            'rataRata_rating' => json_decode($avgRating[0]->rating, true)
        ]);
    }

    public function sumRatingFotografer($id, $sumRating)
    {

        // d(json_decode($avgRating[0]->rating, true));
        // dd($avgRating);
        d($sumRating);
        $this->fotograferModel->save([
            'id_fotografer' => $id,
            'jumlah_rating' => $sumRating

        ]);
    }
}
