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
            $this->fotograferModel->search($keyword);
        } else {
            $fotografer = $this->fotograferModel;
        }




        // $fotograferVar = $this->fotograferModel->findAll();




        // echo gettype($data['fotografer']);
        $arraytemp = $this->fotograferModel->joinkomersil()->getResult();
        $arrayresult = array();
        foreach ($arraytemp as $key) {
            $arrayresult[] = json_decode(json_encode($key), true);;
        }

        $data = [

            'title' => 'Daftar Fotografer',
            // 'fotografer' => $this->fotograferModel->getFotografer(),
            'fotografer' => $arrayresult
        ];



        d($data);

        // $data = json_decode($data, true);

        //$fotograferModel = new \App\Models\FotograferModel();





        // return view('fotografer/index', $data);
        return view('pages/marketplace_page', $data);

        //echo view('pages/marketplace_page', $data);
    }
    public function profileSegment($slug)
    {
        $profil = $this->fotograferModel->getFotografer($slug);
        $data = [
            'title' => 'Profil Fotografer',
            'profil' => $this->fotograferModel->getFotografer($slug)
        ];

        d($data);
        return view('pages/profile_page', $data);
    }
}
