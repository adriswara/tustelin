<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use CodeIgniter\CLI\Console;

class Login extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Login'
        ];

        helper(['form']);
        echo view('logintest/login', $data);
    }

    public function auth()
    {
        $session = session();
        $model = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('email_pengguna', $email)->first();

        function debug_to_console($data)
        {
            $output = $data;
            if (is_array($output))
                $output = implode(',', $output);

            echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
        }


        if ($data) {
            $pass = $data['sandi_pengguna'];

            // $verify_pass = password_verify($password, $pass);
            // debug_to_console($verify_pass);
            // debug_to_console($pass);
            if ($pass == $password) {
                $ses_data = [
                    'id_pengguna'       => $data['id_pengguna'],
                    'username_pengguna'     => $data['username_pengguna'],
                    'email_pengguna'    => $data['email_pengguna'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/dashboard');
            } else {

                $session->setFlashdata('msg', 'Wrong Password');
                // return redirect()->to('/login');
                debug_to_console($data);
            }
        } else {
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
