<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\AlatModel;
use App\Models\FotograferModel;
use App\Models\FotoModel;
use App\Models\AliranKomersilModel;
use App\Models\KotaModel;
use App\Models\UserModel;
use App\Models\ReviewModel;

class DatabaseTest extends BaseController
{
    protected $adminModel;
    protected $fotograferModel;
    protected $aliranKomersilModel;
    protected $fotoModel;
    protected $alatModel;
    protected $kotaModel;
    protected $userModel;
    protected $reviewModel;

    public function __construct()
    {
        $this->adminModel = new AdminModel();
        $this->fotograferModel = new FotograferModel();
        $this->aliranKomersilModel = new AliranKomersilModel();
        $this->fotoModel = new FotoModel();
        $this->alatModel = new AlatModel();
        $this->kotaModel = new KotaModel();
        $this->userModel = new UserModel();
        $this->reviewModel = new ReviewModel();
    }
    public function index()
    {
        $adminVar = $this->adminModel->findAll();
        $fotograferVar = $this->fotograferModel->findAll();
        $aliranKomersilVar = $this->aliranKomersilModel->findAll();
        $fotoVar = $this->fotoModel->findAll();
        $alatVar = $this->alatModel->findAll();
        $kotaVar = $this->kotaModel->findAll();
        $userVar = $this->userModel->findAll();
        $reviewVar = $this->reviewModel->findAll();

        $data = [

            'title' => 'Daftar Fotografer',
            'admin' => $adminVar,
            'fotografer' => $fotograferVar,
            'foto' => $fotoVar,
            'aliran_komersil' => $aliranKomersilVar,
            'alat' => $alatVar,
            'kota' => $kotaVar,
            'user' => $userVar,
            'review' => $reviewVar
        ];

        //$fotograferModel = new \App\Models\FotograferModel();
        $this->session = session();
        $data['get_sess'] = $this->session->get('username_admin');
        d($data);




        return view('databasetest/index', $data);
        //return view('pages/marketplace_page', $data);
    }
    public function delete($id)
    {


        $this->userModel->where('id_pengguna', $id)->delete();
        return redirect()->to('/Databasetest');
    }
}



 //no controller
        //$db = \Config\Database::connect();
        //$fotografer = $db->query("SELECT * FROM fotografer");
        //dd($fotografer);
        //foreach ($fotografer->getResultArray() as $row) {
        //    d($row);
        //}