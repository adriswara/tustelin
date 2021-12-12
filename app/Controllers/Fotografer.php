<?php

namespace App\Controllers;

use App\Models\FotograferModel;

class Fotografer extends BaseController
{
    protected $fotograferModel;
    public function __construct()
    {
        $this->fotograferModel = new FotograferModel();
    }
    public function index()
    {
        $fotograferVar = $this->fotograferModel->findAll();


        $data = [

            'title' => 'Daftar Fotografer',
            'fotografer' => $fotograferVar
        ];

        //$fotograferModel = new \App\Models\FotograferModel();





        return view('fotografer/index', $data);
    }
}



 //no controller
        //$db = \Config\Database::connect();
        //$fotografer = $db->query("SELECT * FROM fotografer");
        //dd($fotografer);
        //foreach ($fotografer->getResultArray() as $row) {
        //    d($row);
        //}