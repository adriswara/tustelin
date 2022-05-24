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

    public function editFotografer($slug)
    {

        $this->session = session();



        $data = [
            'title' => 'Form Ubah Data Fotografer',
            'validation' => \Config\Services::validation(),
            'fotografer' => $this->fotograferModel->getFotografer($slug)
        ];

        d($data);

        $data['get_sess'] = $this->session->get('username_admin');



        return view('databasetest/editFotografer', $data);
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


    public function savePengguna()
    {
        // dd($this->request->getVar());

        if (!$this->validate([
            'username_pengguna' => [
                'rules' => 'required|is_unique[pelanggan.username_pengguna]',
                'errors' => [
                    'required' => '{field} nama harus diisi.',
                    'is_unique' => '{field} nama sudah terdaftar'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('databasetest/createPengguna')->withInput()->with('validation', $validation);
        }

        $this->userModel->save([
            'username_pengguna' => $this->request->getVar('username_pengguna'),
            'sandi_pengguna' => $this->request->getVar('sandi_pengguna'),
            'email_pengguna' => $this->request->getVar('email_pengguna')
        ]);


        session()->setFlashdata('pesan', 'Input berhasil');

        return redirect()->to('/databasetest');
    }

    public function saveKomersil()
    {
        // dd($this->request->getVar());

        if (!$this->validate([
            'nama_aliran' => [
                'rules' => 'required|is_unique[aliran_komersil.nama_aliran]',
                'errors' => [
                    'required' => '{field} nama harus diisi.',
                    'is_unique' => '{field} nama sudah terdaftar'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('databasetest/createKomersil')->withInput()->with('validation', $validation);
        }

        $this->aliranKomersilModel->save([
            'nama_aliran' => $this->request->getVar('nama_aliran')

        ]);


        session()->setFlashdata('pesan', 'Input berhasil');

        return redirect()->to('/databasetest');
    }

    public function saveAlat()
    {
        // dd($this->request->getVar());

        if (!$this->validate([
            'nama_alat' => [
                'rules' => 'required|is_unique[alat.nama_alat]',
                'errors' => [
                    'required' => '{field} nama harus diisi.',
                    'is_unique' => '{field} nama sudah terdaftar'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('databasetest/createAlat')->withInput()->with('validation', $validation);
        }

        $this->alatModel->save([
            'nama_alat' => $this->request->getVar('nama_alat'),
            'merek' => $this->request->getVar('merek'),
            'jenis' => $this->request->getVar('jenis')

        ]);


        session()->setFlashdata('pesan', 'Input berhasil');

        return redirect()->to('/databasetest');
    }

    public function saveAdmin()
    {
        // dd($this->request->getVar());

        if (!$this->validate([
            'username_admin' => [
                'rules' => 'required|is_unique[admin.username_admin]',
                'errors' => [
                    'required' => '{field} nama harus diisi.',
                    'is_unique' => '{field} nama sudah terdaftar'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('databasetest/createAdmin')->withInput()->with('validation', $validation);
        }

        $this->adminModel->save([
            'username_admin' => $this->request->getVar('username_admin'),
            'password_admin' => $this->request->getVar('password_admin'),
            'email_admin' => $this->request->getVar('email_admin'),



        ]);


        session()->setFlashdata('pesan', 'Input berhasil');

        return redirect()->to('/databasetest');
    }

    public function saveKota()
    {
        // dd($this->request->getVar());

        if (!$this->validate([
            'nama_kota' => [
                'rules' => 'required|is_unique[kota.nama_kota]',
                'errors' => [
                    'required' => '{field} nama harus diisi.',
                    'is_unique' => '{field} nama sudah terdaftar'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('databasetest/createKota')->withInput()->with('validation', $validation);
        }

        $this->kotaModel->save([
            'nama_kota' => $this->request->getVar('nama_kota')


        ]);


        session()->setFlashdata('pesan', 'Input berhasil');

        return redirect()->to('/databasetest');
    }

    public function saveReview()
    {
        // dd($this->request->getVar());

        if (!$this->validate([
            'id_pengguna' => [
                'rules' => 'required|is_unique[review.id_pengguna]',
                'errors' => [
                    'required' => '{field} nama harus diisi.',
                    'is_unique' => '{field} nama sudah terdaftar'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('databasetest/createReview')->withInput()->with('validation', $validation);
        }

        $this->reviewModel->save([
            'id_fotografer' => $this->request->getVar('id_fotografer'),
            'id_pengguna' => $this->request->getVar('id_pengguna'),
            'review' => $this->request->getVar('review'),
            'rating' => $this->request->getVar('rating')

        ]);


        session()->setFlashdata('pesan', 'Input berhasil');

        return redirect()->to('/databasetest');
    }

    public function saveFoto()
    {
        // dd($this->request->getVar());

        if (!$this->validate([
            'file_foto' => [
                'rules' => 'required|is_unique[foto.file_foto]',
                'errors' => [
                    'required' => '{field} nama harus diisi.',
                    'is_unique' => '{field} nama sudah terdaftar'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('databasetest/createFoto')->withInput()->with('validation', $validation);
        }

        $this->fotoModel->save([
            'file_foto' => $this->request->getVar('file_foto'),
            'id_fotografer' => $this->request->getVar('id_fotografer'),
            'judul' => $this->request->getVar('judul'),
            // 'ulasan' => $this->request->getVar('ulasan'),
            // 'jumlah_rating' => $this->request->getVar('jumlah_rating')
            // 'rataRata_rating' => $this->request->getVar('rataRata_rating')


        ]);


        session()->setFlashdata('pesan', 'Input berhasil');

        return redirect()->to('/databasetest');
    }

    public function updateFotografer($id)
    {

        // dd(isset($this->request->getVar('slug')));

        // $prevFotografer = $this->fotograferModel->getFotografer($this->request->getVar('slug'));

        // if ($prevFotografer['nama'] == $this->request->getVar('nama')) {
        //     $rule_nama = 'required';
        // } else {
        //     $rule_nama = 'required | is_unique[fotografer.nama]';
        // }

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
            return redirect()->to('databasetest/editFotografer/' . $this->request->getVar('slug'))->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->fotograferModel->save([
            'id_fotografer' => $id,
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'displaypic' => $this->request->getVar('displaypic'),
            'akun_instagram' => $this->request->getVar('akun_instagram')
        ]);


        session()->setFlashdata('pesan', 'Edit berhasil');

        return redirect()->to('/databasetest');
    }


    public function deleteFotografer($id)
    {
        $this->fotograferModel->where('id_fotografer', $id)->delete();
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/Databasetest');
    }

    public function deletePengguna($id)
    {
        $this->userModel->where('id_pengguna', $id)->delete();
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/Databasetest');
    }
    public function deleteKomersil($id)
    {
        $this->aliranKomersilModel->where('id_komersil', $id)->delete();
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/Databasetest');
    }
    public function deleteAlat($id)
    {
        $this->alatModel->where('id_alat', $id)->delete();
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/Databasetest');
    }
    public function deleteAdmin($id)
    {
        $this->adminModel->where('id_admin', $id)->delete();
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/Databasetest');
    }
    public function deleteKota($id)
    {
        $this->kotaModel->where('id_kota', $id)->delete();
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/Databasetest');
    }
    public function deleteReview($id)
    {
        $this->reviewModel->where('id_review', $id)->delete();
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/Databasetest');
    }
    public function deleteFoto($id)
    {
        $this->fotoModel->where('id_foto', $id)->delete();
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
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