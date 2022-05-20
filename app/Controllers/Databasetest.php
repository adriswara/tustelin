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

    public function createAdmin()
    {

        $this->session = session();

        $data = [
            'title' => 'Form Tambah Data Admin',
            'validation' => \Config\Services::validation()
        ];


        $data['get_sess'] = $this->session->get('username_admin');

        return view('databasetest/createAdmin', $data);
    }

    public function createAlat()
    {

        $this->session = session();

        $data = [
            'title' => 'Form Tambah Data Alat',
            'validation' => \Config\Services::validation()
        ];


        $data['get_sess'] = $this->session->get('username_admin');

        return view('databasetest/createAlat', $data);
    }

    public function createKomersil()
    {

        $this->session = session();

        $data = [
            'title' => 'Form Tambah Data Aliran',
            'validation' => \Config\Services::validation()
        ];


        $data['get_sess'] = $this->session->get('username_admin');

        return view('databasetest/createKomersil', $data);
    }

    public function createFoto()
    {

        $this->session = session();

        $data = [
            'title' => 'Form Tambah Data Foto',
            'validation' => \Config\Services::validation()
        ];


        $data['get_sess'] = $this->session->get('username_admin');

        return view('databasetest/createFoto', $data);
    }

    public function createFotografer()
    {

        $this->session = session();

        $data = [
            'title' => 'Form Tambah Data Fotografer',
            'validation' => \Config\Services::validation()
        ];


        $data['get_sess'] = $this->session->get('username_admin');

        return view('databasetest/createFotografer', $data);
    }

    public function createKota()
    {

        $this->session = session();

        $data = [
            'title' => 'Form Tambah Data Kota',
            'validation' => \Config\Services::validation()
        ];


        $data['get_sess'] = $this->session->get('username_admin');

        return view('databasetest/createKota', $data);
    }

    public function createPengguna()
    {

        $this->session = session();

        $data = [
            'title' => 'Form Tambah Data Pengguna',
            'validation' => \Config\Services::validation()
        ];


        $data['get_sess'] = $this->session->get('username_admin');

        return view('databasetest/createPengguna', $data);
    }

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


    public function saveFotografer()
    {
        // dd($this->request->getVar());

        if (!$this->validate([
            'nama' => [
                'rules' => 'required|is_unique[fotografer.nama]',
                'errors' => [
                    'required' => '{field} nama harus diisi.',
                    'is_unique' => '{field} nama sudah terdaftar'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('databasetest/createFotografer')->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->fotograferModel->save([
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'displaypic' => $this->request->getVar('displaypic'),
            'akun_instagram' => $this->request->getVar('akun_instagram')
        ]);


        session()->setFlashdata('pesan', 'Input berhasil');

        return redirect()->to('/databasetest');
    }

    public function deleteFotografer($id)
    {
        $this->fotograferModel->where('id_fotografer', $id)->delete();
        return redirect()->to('/Databasetest');
    }

    public function deletePengguna($id)
    {
        $this->userModel->where('id_pengguna', $id)->delete();
        return redirect()->to('/Databasetest');
    }
    public function deleteKomersil($id)
    {
        $this->aliranKomersilModel->where('id_komersil', $id)->delete();
        return redirect()->to('/Databasetest');
    }
    public function deleteAlat($id)
    {
        $this->alatModel->where('id_alat', $id)->delete();
        return redirect()->to('/Databasetest');
    }
    public function deleteAdmin($id)
    {
        $this->adminModel->where('id_admin', $id)->delete();
        return redirect()->to('/Databasetest');
    }
    public function deleteKota($id)
    {
        $this->kotaModel->where('id_kota', $id)->delete();
        return redirect()->to('/Databasetest');
    }
    public function deleteReview($id)
    {
        $this->reviewModel->where('id_review', $id)->delete();
        return redirect()->to('/Databasetest');
    }
    public function deleteFoto($id)
    {
        $this->fotoModel->where('id_foto', $id)->delete();
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