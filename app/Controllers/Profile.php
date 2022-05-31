<?php

namespace App\Controllers;

use App\Models\AliranKomersilModel;
use App\Models\FotograferModel;
use App\Models\KotaModel;
use App\Models\ReviewModel;

class Profile extends BaseController
{
    protected $fotograferModel;
    public function __construct()
    {
        $this->fotograferModel = new FotograferModel();
        $this->alirankomersilModel = new AliranKomersilModel();
        $this->reviewModel = new ReviewModel();
        $this->kotaModel = new KotaModel();
    }


    public function index()
    {
        // d($this->request->getVar('keyword'));
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

            'title' => 'Daftar Fotografer',
            // 'fotografer' => $this->fotograferModel->getFotografer(),
            'fotografer' => $arrayResult,
            'kriteria' => $kriteria,
            'filter_aliran' => null
        ];
        // dd($data);
        // $data = json_decode($data, true);

        //$fotograferModel = new \App\Models\FotograferModel();

        // return view('fotografer/index', $data);
        // dd($data);
        return view('pages/marketplace_page', $data);

        //echo view('pages/marketplace_page', $data);
    }
    public function market_filter($filter_aliran = null)
    {

        if ($filter_aliran == null) {
            $filter_aliran = $this->request->getVar('filter_aliran[]');
        }

        $kriteria = $this->criteriaGetter();


        if ($filter_aliran) {
            $filterResult = $this->fotograferModel->filter($filter_aliran);
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
            'filter_aliran' => $filter_aliran
        ];

        // dd($data);

        // dd($filterResult);
        return view('pages/marketplace_page', $data);
    }
    public function profileSegment($slug)
    {
        $profil = $this->fotograferModel->getProfil($slug);
        $data = [
            'title' => 'Profil Fotografer',
            'profil' => $this->fotograferModel->getProfil($slug)
        ];

        $this->session = session();

        $data['get_sess'] = $this->session->get('username_pengguna');

        d($data);

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
}
