<?php

namespace App\Controllers;

use App\Models\AliranKomersilModel;
use App\Models\FotograferModel;

class Profile extends BaseController
{
    protected $fotograferModel;
    public function __construct()
    {
        $this->fotograferModel = new FotograferModel();
        $this->alirankomersilModel = new AliranKomersilModel();
    }


    public function index()
    {
        // d($this->request->getVar('keyword'));

        $keyword = $this->request->getVar('keyword');
        // $joins = $this->fotograferModel->join();
        if ($keyword) {
            $arrayResult = $this->fotograferModel->search($keyword);
        } else {
            $arrayResult = $this->fotograferModel;
        }





        $data = [

            'title' => 'Daftar Fotografer',
            // 'fotografer' => $this->fotograferModel->getFotografer(),
            'fotografer' => $arrayResult
        ];





        // $data = json_decode($data, true);

        //$fotograferModel = new \App\Models\FotograferModel();





        // return view('fotografer/index', $data);
        return view('pages/marketplace_page', $data);

        //echo view('pages/marketplace_page', $data);
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

        // d($data);

        // untuk exception not found

        if (empty($data['profil'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Fotografer' . $slug . 'tidak ditemukan');
        }

        return view('pages/profile_page', $data);
    }
}
