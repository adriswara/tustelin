<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Login extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('logintest/login');
    }

    public function auth()
    {
        $session = session();
        $model = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('email_pengguna', $email)->first();
        if ($data) {
            $pass = $data['sandi_pengguna'];
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $ses_data = [
                    'id_pengguna'       => $data['id_pengguna'],
                    'username_pengguna'     => $data['username_pengguna'],
                    'email_pengguna'    => $data['email_pengguna'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('logintest/dashboard');
            } else {
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('logintest/login');
            }
        } else {
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('logintest/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('logintest/login');
    }
}
