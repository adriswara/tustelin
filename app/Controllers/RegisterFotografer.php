<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AliranKomersilModel;
use App\Models\FotograferModel;
use App\Models\KotaModel;
use App\Models\ReviewModel;
use App\Models\UserModel;
use App\Models\AdminModel;
use App\Models\FotoModel;
use App\Models\AlatModel;
use App\Models\PemesananModel;

class RegisterFotografer extends Controller
{


    public function __construct()
    {
        $this->fotograferModel = new FotograferModel();
        $this->alirankomersilModel = new AliranKomersilModel();
        $this->reviewModel = new ReviewModel();
        $this->kotaModel = new KotaModel();
        $this->controllerDatabase = new DatabaseTest();
        $this->userModel = new UserModel();
        $this->adminModel = new AdminModel();
        $this->fotoModel = new FotoModel();
        $this->alatModel = new AlatModel();
        $this->pemesananModel = new PemesananModel();
    }

    public function index()
    {
        //include helper form
        helper(['form']);
        $data = [
            'title' => 'Register',
            'validation' => \Config\Services::validation(),
            'aliran' => $this->alirankomersilModel->findAliran(),
            'alat' => $this->alatModel->findAll(),
            'kota' => $this->kotaModel->findall()
        ];
        d($data['aliran']);
        echo view('logintest/registerFotografer', $data);
    }

    public function save()
    {
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'name'          => 'required|min_length[3]|max_length[20]',
            'email'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[pelanggan.email_pengguna]',
            'password'      => 'required|min_length[6]|max_length[200]',
            'confpassword'  => 'matches[password]'
        ];

        if ($this->validate($rules)) {
            $model = new UserModel();
            $data = [
                'title' => 'Register',
                'username_pengguna'     => $this->request->getVar('name'),
                'email_pengguna'    => $this->request->getVar('email'),
                'sandi_pengguna' => $this->request->getVar('password'), PASSWORD_DEFAULT //password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $model->save($data);
            return redirect()->to('/login');
        } else {
            $data['validation'] = $this->validator;
            echo view('logintest/registerFotografer', $data);
        }
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

        ])) {
            // $validation = \Config\Services::validation();
            // d($validation);
            // return redirect()->to('databasetest/createFotografer')->withInput()->with('validation', $validation);
            return redirect()->to('registerFotografer/index')->withInput();
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
}
