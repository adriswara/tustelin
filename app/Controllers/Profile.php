<?php

namespace App\Controllers;

use App\Models\FotograferModel;

class Profile extends BaseController
{
    protected $fotograferModel;
    public function __construct()
    {
        $this->fotograferModel = new FotograferModel();
    }


    public function index()
    {
        d($this->request->getVar('keyword'));

        $keyword = $this->request->getVar('keyword');

        if ($keyword) {
            $this->fotograferModel->search($keyword);
        } else {
            $fotografer = $this->fotograferModel;
        }




        // $fotograferVar = $this->fotograferModel->findAll();


        $data = [

            'title' => 'Daftar Fotografer',
            'fotografer' => $this->fotograferModel->getFotografer()
        ];

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
        return view('pages/profile_page', $data);
    }
}
