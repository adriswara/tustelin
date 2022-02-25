<?php

namespace App\Controllers;

use App\Models\AlatModel;
use App\Models\FotograferModel;
use App\Models\AliranKomersilModel;

class Fotografer extends BaseController
{
    protected $fotograferModel;
    protected $aliranKomersilModel;
    protected $alatModel;
    public function __construct()
    {
        $this->fotograferModel = new FotograferModel();
        $this->aliranKomersilModel = new AliranKomersilModel();
        $this->alatModel = new AlatModel();
    }
    public function index()
    {
        $fotograferVar = $this->fotograferModel->findAll();
        $aliranKomersilVar = $this->aliranKomersilModel->findAll();
        $alatVar = $this->alatModel->findAll();


        $data = [

            'title' => 'Daftar Fotografer',
            'fotografer' => $fotograferVar,
            'aliran_komersil' => $aliranKomersilVar,
            'alat' => $alatVar
        ];

        //$fotograferModel = new \App\Models\FotograferModel();





        return view('fotografer/index', $data);
        //return view('pages/marketplace_page', $data);
    }
}



 //no controller
        //$db = \Config\Database::connect();
        //$fotografer = $db->query("SELECT * FROM fotografer");
        //dd($fotografer);
        //foreach ($fotografer->getResultArray() as $row) {
        //    d($row);
        //}