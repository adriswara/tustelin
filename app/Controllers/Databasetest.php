<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\AlatModel;
use App\Models\FotograferModel;
use App\Models\FotoModel;
use App\Models\AliranKomersilModel;
use App\Models\KotaModel;
use App\Models\PemesananModel;
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
    protected $pemesananModel;
    protected $avgRating;
    protected $sumRating;

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
        $this->pemesananModel = new PemesananModel();
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
        $data['admin_sess'] = $this->session->get('username_admin');
        // d($data);




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


        $data['admin_sess'] = $this->session->get('username_admin');

        return view('databasetest/createAdmin', $data);
    }

    public function createAlat()
    {

        $this->session = session();

        $data = [
            'title' => 'Form Tambah Data Alat',
            'validation' => \Config\Services::validation()
        ];


        $data['admin_sess'] = $this->session->get('username_admin');

        return view('databasetest/createAlat', $data);
    }

    public function createKomersil()
    {

        $this->session = session();

        $data = [
            'title' => 'Form Tambah Data Aliran',
            'validation' => \Config\Services::validation()
        ];


        $data['admin_sess'] = $this->session->get('username_admin');

        return view('databasetest/createKomersil', $data);
    }

    public function createFoto()
    {

        $this->session = session();

        $data = [
            'title' => 'Form Tambah Data Foto',
            'validation' => \Config\Services::validation()
        ];


        $data['admin_sess'] = $this->session->get('username_admin');

        return view('databasetest/createFoto', $data);
    }

    public function createFotografer()
    {

        $this->session = session();

        $data = [
            'title' => 'Form Tambah Data Fotografer',
            'validation' => \Config\Services::validation()
        ];


        $data['admin_sess'] = $this->session->get('username_admin');

        return view('databasetest/createFotografer', $data);
    }

    public function createKota()
    {

        $this->session = session();

        $data = [
            'title' => 'Form Tambah Data Kota',
            'validation' => \Config\Services::validation()
        ];


        $data['admin_sess'] = $this->session->get('username_admin');

        return view('databasetest/createKota', $data);
    }

    public function createPengguna()
    {

        $this->session = session();

        $data = [
            'title' => 'Form Tambah Data Pengguna',
            'validation' => \Config\Services::validation()
        ];


        $data['admin_sess'] = $this->session->get('username_admin');

        return view('databasetest/createPengguna', $data);
    }

    public function createReview()
    {

        $this->session = session();

        $data = [
            'title' => 'Form Tambah Data Review',
            'validation' => \Config\Services::validation()
        ];


        $data['admin_sess'] = $this->session->get('username_admin');

        return view('databasetest/createReview', $data);
    }

    public function editAdmin($id = null)
    {

        $this->session = session();



        $data = [
            'title' => 'Form Ubah Data Alat',
            'validation' => \Config\Services::validation(),
            'admin' => $this->adminModel->getAdmin($id)
        ];



        $data['admin_sess'] = $this->session->get('username_admin');

        d($data);

        return view('databasetest/editAdmin', $data);
    }

    public function editAlat($id = null)
    {

        $this->session = session();



        $data = [
            'title' => 'Form Ubah Data Alat',
            'validation' => \Config\Services::validation(),
            'alat' => $this->alatModel->getAlat($id)
        ];



        $data['admin_sess'] = $this->session->get('username_admin');

        d($data);

        return view('databasetest/editAlat', $data);
    }

    public function editFoto($id = null)
    {

        $this->session = session();



        $data = [
            'title' => 'Form Ubah Data Foto',
            'validation' => \Config\Services::validation(),
            'foto' => $this->fotoModel->getFoto($id)
        ];





        $data['admin_sess'] = $this->session->get('username_admin');



        return view('databasetest/editFoto', $data);
    }

    public function editFotografer($id = null)
    {

        $this->session = session();



        $data = [
            'title' => 'Form Ubah Data Fotografer',
            'validation' => \Config\Services::validation(),
            'fotografer' => $this->fotograferModel->getFotografer($id)
        ];



        $data['admin_sess'] = $this->session->get('username_admin');



        return view('databasetest/editFotografer', $data);
    }

    public function editKomersil($id = null)
    {

        $this->session = session();



        $data = [
            'title' => 'Form Ubah Data Fotografer',
            'validation' => \Config\Services::validation(),
            'aliran_komersil' => $this->aliranKomersilModel->getAliran($id)
        ];



        $data['admin_sess'] = $this->session->get('username_admin');



        return view('databasetest/editKomersil', $data);
    }

    public function editKota($id = null)
    {

        $this->session = session();



        $data = [
            'title' => 'Form Ubah Data Fotografer',
            'validation' => \Config\Services::validation(),
            'kota' => $this->kotaModel->getKota($id)
        ];



        $data['admin_sess'] = $this->session->get('username_admin');



        return view('databasetest/editKota', $data);
    }



    public function editPengguna($id = null)
    {

        $this->session = session();



        $data = [
            'title' => 'Form Ubah Data Fotografer',
            'validation' => \Config\Services::validation(),
            'pelanggan' => $this->userModel->getUser($id)
        ];



        $data['admin_sess'] = $this->session->get('username_admin');



        return view('databasetest/editPengguna', $data);
    }

    public function editReview($id = null)
    {

        $this->session = session();



        $data = [
            'title' => 'Form Ubah Data Fotografer',
            'validation' => \Config\Services::validation(),
            'review' => $this->reviewModel->getReview($id)
        ];



        $data['admin_sess'] = $this->session->get('username_admin');



        return view('databasetest/editReview', $data);
    }
    public function editReviewTransaksi($id = null)
    {

        $this->session = session();



        $data = [
            'title' => 'Form Ubah Data Fotografer',
            'validation' => \Config\Services::validation(),
            'review' => $this->pemesananModel->getReview($id)
        ];



        $data['get_sess'] = $this->session->get('username_pengguna');



        return view('pages/editReview', $data);
    }



    public function saveFotografer()
    {


        if (!$this->validate([
            'nama' => [
                'rules' => 'required|is_unique[fotografer.nama]',
                'errors' => [
                    'required' => '{field} nama harus diisi.',
                    'is_unique' => '{field} nama sudah terdaftar'
                ]
            ],
            'displaypic' => [
                'rules' => 'uploaded[displaypic]|max_size[displaypic,35840]|is_image[displaypic]|mime_in[displaypic,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Pilih gambar display terlebih dahulu',
                    'max_size' => 'Maksimal ukuran gambar adalah 35MB',
                    'is_image' => 'File gambar yang anda pilih tidak valid',
                    'mime_in' => 'File yang anda pilih bukan gambar'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // d($validation);
            // return redirect()->to('databasetest/createFotografer')->withInput()->with('validation', $validation);
            return redirect()->to('databasetest/createFotografer')->withInput();
        }

        $fileDisplaypic = $this->request->getFile('displaypic');
        // dd($fileDisplaypic);
        //$imgName = $fileDisplaypic->getName();
        $slug = url_title($this->request->getVar('nama'), '-', true);
        $imgName = $slug . '.' . $fileDisplaypic->guessExtension();
        $fileDisplaypic->move('displaypic', $imgName); //move ke nama folder display pic di public
        $this->fotograferModel->save([
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'displaypic' => $imgName,
            'akun_instagram' => $this->request->getVar('akun_instagram'),
            'ktp' => $this->request->getVar('ktp'),
            'id_komersil' => $this->request->getVar('id_komersil'),
            'id_alat' => $this->request->getVar('id_alat'),
            'id_kota' => $this->request->getVar('id_kota'),
            'no_telfon' => $this->request->getVar('no_telfon'),
            'alamat' => $this->request->getVar('alamat'),
            'harga' => $this->request->getVar('harga'),
            'email' => $this->request->getVar('email'),
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
        $this->reviewModel->save([
            'id_fotografer' => $this->request->getVar('id_fotografer'),
            'id_pengguna' => $this->request->getVar('id_pengguna'),
            'review' => $this->request->getVar('review'),
            'rating' => $this->request->getVar('rating')

        ]);


        session()->setFlashdata('pesan', 'Input berhasil');
        $avgRating = $this->reviewModel->avgReview($this->request->getVar('id_fotografer'));
        $this->avgRatingFotografer($this->request->getVar('id_fotografer'), $avgRating);
        $sumRating = $this->reviewModel->sumReview($this->request->getVar('id_fotografer'));
        $this->sumRatingFotografer($this->request->getVar('id_fotografer'), $sumRating);
        return redirect()->to('/databasetest');
    }

    public function saveFoto()
    {


        if (!$this->validate([
            'id_fotografer' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'id is required.'

                ]
            ],
            'file_foto' => [
                'rules' => 'uploaded[file_foto]|max_size[file_foto,35840]|is_image[file_foto]|mime_in[file_foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Pilih gambar display terlebih dahulu',
                    'max_size' => 'Maksimal ukuran gambar adalah 35MB',
                    'is_image' => 'File gambar yang anda pilih tidak valid',
                    'mime_in' => 'File yang anda pilih bukan gambar'
                ]
            ]
        ])) {

            return redirect()->to('databasetest/createFoto')->withInput();
        }

        $fileFoto = $this->request->getFile('file_foto');
        $signatureFoto = $this->request->getFile('judul');
        $idFotografer = $this->request->getVar('id_fotografer');
        $imgName = $idFotografer . $signatureFoto . '.' . $fileFoto->guessExtension();
        $fileFoto->move('file_foto', $imgName); //move ke nama folder display pic di public
        $this->fotoModel->save([
            'judul' => $this->request->getVar('judul'),
            'id_fotografer' => $idFotografer,
            'file_foto' => $imgName

        ]);


        session()->setFlashdata('pesan', 'Input berhasil');

        return redirect()->to('/databasetest');
    }

    public function updateAdmin($id)
    {


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
            return redirect()->to('databasetest/editAdmin/' . $id)->withInput()->with('validation', $validation);
        }


        $this->adminModel->save([
            'id_admin' => $id,
            'username_admin' => $this->request->getVar('username_admin'),
            'password_admin' => $this->request->getVar('password_admin'),
            'email_admin' => $this->request->getVar('email_admin')
        ]);


        session()->setFlashdata('pesan', 'Edit berhasil');

        // return redirect()->to('/databasetest');
        return redirect()->to('databasetest/editAdmin/' . $id);
    }

    public function updateAlat($id)
    {


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
            return redirect()->to('databasetest/editAlat/' . $id)->withInput()->with('validation', $validation);
        }


        $this->alatModel->save([
            'id_alat' => $id,
            'nama_alat' => $this->request->getVar('nama_alat'),
            'merek' => $this->request->getVar('merek'),
            'jenis' => $this->request->getVar('jenis')
        ]);


        session()->setFlashdata('pesan', 'Edit berhasil');

        // return redirect()->to('/databasetest');
        return redirect()->to('databasetest/editAlat/' . $id);
    }

    public function updateFoto($id)
    {



        if (!$this->validate([
            'id_fotografer' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'id is required.'

                ]
            ],
            'file_foto' => [
                'rules' => 'uploaded[file_foto]|max_size[file_foto,35840]|is_image[file_foto]|mime_in[file_foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Pilih gambar display terlebih dahulu',
                    'max_size' => 'Maksimal ukuran gambar adalah 35MB',
                    'is_image' => 'File gambar yang anda pilih tidak valid',
                    'mime_in' => 'File yang anda pilih bukan gambar'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // d($validation);
            // return redirect()->to('databasetest/createFotografer')->withInput()->with('validation', $validation);
            return redirect()->to('databasetest/editFoto')->withInput();
        }
        $foto = $this->fotoModel->find($id);
        unlink('file_foto/' . $foto['file_foto']);
        $fileFoto = $this->request->getFile('file_foto');

        $idFotografer = $this->request->getVar('id_fotografer');
        //dd($this->request->getVar('olddisplaypic'));

        if ($fileFoto->getError() == 4) {
            $imgName = $this->request->getVar('oldfile_foto');
        } else {
            $signatureFoto = $this->request->getVar('judul');
            $imgName = $idFotografer . $signatureFoto . '.' . $fileFoto->guessExtension();
            $fileFoto->move('file_foto', $imgName);
            // unlink('displaypic/' . $this->request->getVar('olddisplaypic'));
        }

        $this->fotoModel->save([
            'id_foto' => $id,
            'judul' => $this->request->getVar('judul'),
            'id_fotografer' => $idFotografer,
            'file_foto' => $imgName

        ]);


        session()->setFlashdata('pesan', 'Edit berhasil');

        // return redirect()->to('/databasetest');
        return redirect()->to('databasetest/editFoto/' . $id);
    }

    public function updateFotografer($id)
    {



        if (!$this->validate([
            'nama' => [
                'rules' => 'required|is_unique[fotografer.nama]',
                'errors' => [
                    'required' => '{field} nama harus diisi.',
                    'is_unique' => '{field} nama sudah terdaftar'
                ]
            ],
            'displaypic' => [
                'rules' => 'uploaded[displaypic]|max_size[displaypic,35840]|is_image[displaypic]|mime_in[displaypic,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Pilih gambar display terlebih dahulu',
                    'max_size' => 'Maksimal ukuran gambar adalah 35MB',
                    'is_image' => 'File gambar yang anda pilih tidak valid',
                    'mime_in' => 'File yang anda pilih bukan gambar'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('databasetest/editFotografer/' . $id)->withInput()->with('validation', $validation);
            return redirect()->to('databasetest/editFotografer/' . $id)->withInput();
        }
        $fotografer = $this->fotograferModel->find($id);
        unlink('displaypic/' . $fotografer['displaypic']);
        $fileDisplaypic = $this->request->getFile('displaypic');
        $slug = url_title($this->request->getVar('nama'), '-', true);

        //dd($this->request->getVar('olddisplaypic'));

        if ($fileDisplaypic->getError() == 4) {
            $imgName = $this->request->getVar('olddisplaypic');
        } else {
            $imgName = $slug . '.' . $fileDisplaypic->guessExtension();
            $fileDisplaypic->move('displaypic', $imgName);
            // unlink('displaypic/' . $this->request->getVar('olddisplaypic'));
        }

        $this->fotograferModel->save([
            'id_fotografer' => $id,
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'displaypic' => $imgName,
            'akun_instagram' => $this->request->getVar('akun_instagram'),
            'ktp' => $this->request->getVar('ktp'),

        ]);


        session()->setFlashdata('pesan', 'Edit berhasil');

        // return redirect()->to('/databasetest');
        return redirect()->to('databasetest/editFotografer/' . $id);
    }

    public function updateKomersil($id)
    {


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
            return redirect()->to('databasetest/editKomersil/' . $id)->withInput()->with('validation', $validation);
        }


        $this->aliranKomersilModel->save([
            'id_komersil' => $id,
            'nama_aliran' => $this->request->getVar('nama_aliran'),
        ]);


        session()->setFlashdata('pesan', 'Edit berhasil');

        // return redirect()->to('/databasetest');
        return redirect()->to('databasetest/editKomersil/' . $id);
    }

    public function updateKota($id)
    {


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
            return redirect()->to('databasetest/editKota/' . $id)->withInput()->with('validation', $validation);
        }


        $this->kotaModel->save([
            'id_kota' => $id,
            'nama_kota' => $this->request->getVar('nama_kota'),
        ]);


        session()->setFlashdata('pesan', 'Edit berhasil');

        // return redirect()->to('/databasetest');
        return redirect()->to('databasetest/editKota/' . $id);
    }



    public function updatePengguna($id)
    {


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
            return redirect()->to('databasetest/editPengguna/' . $id)->withInput()->with('validation', $validation);
        }


        $this->userModel->save([
            'id_pengguna' => $id,
            'username_pengguna' => $this->request->getVar('username_pengguna'),
        ]);


        session()->setFlashdata('pesan', 'Edit berhasil');

        // return redirect()->to('/databasetest');
        return redirect()->to('databasetest/editPengguna/' . $id);
    }


    public function updateReview($id)
    {




        $this->reviewModel->save([
            'id_review' => $id,
            'id_fotografer' => $this->request->getVar('id_fotografer'),
            'id_pengguna' => $this->request->getVar('id_pengguna'),
            'review' => $this->request->getVar('review'),
            'rating' => $this->request->getVar('rating'),

        ]);


        session()->setFlashdata('pesan', 'Edit berhasil');

        $avgRating = $this->reviewModel->avgReview($this->request->getVar('id_fotografer'));
        // dd($avgRating);
        $this->avgRatingFotografer($this->request->getVar('id_fotografer'), $avgRating);


        // return redirect()->to('/databasetest');
        return redirect()->to('databasetest/editReview/' . $id);
    }

    public function updateReviewTransaksi($id)
    {
        $this->pemesananModel->save([
            'id_pemesanan' => $id,
            'ulasan' => $this->request->getVar('ulasan'),
            'rating' => $this->request->getVar('rating'),

        ]);
        session()->setFlashdata('pesan', 'Edit berhasil');
        $sumRating = $this->pemesananModel->sumReview($this->request->getVar('id_fotografer'));
        $avgRating = $this->pemesananModel->avgReview($this->request->getVar('id_fotografer'));
        $this->avgRatingFotografer($this->request->getVar('id_fotografer'), $avgRating);
        $this->sumRatingFotografer($this->request->getVar('id_fotografer'), $sumRating);
        return redirect()->to('profile/lihatpesanpelanggan/' . $id);
    }

    // buat input save ke db fotografer
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


    public function deleteFotografer($id)
    {

        $fotografer = $this->fotograferModel->find($id);
        unlink('displaypic/' . $fotografer['displaypic']);

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