<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AdminModel;
use App\Models\FotograferModel;
use CodeIgniter\CLI\Console;

class LoginFotografer extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Login Fotografer'
        ];

        helper(['form']);
        echo view('logintest/loginFotografer', $data);
    }

    public function auth()
    {
        $session = session();
        $model = new FotograferModel();
        $email = $this->request->getVar('email_fotografer');
        $password = $this->request->getVar('password_fotografer');
        $data = $model->where('email_fotografer', $email)->first();
        // d($data);
        function debug_to_console($data)
        {
            $output = $data;
            if (is_array($output))
                $output = implode(',', $output);

            echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
            // d($data);
        }


        if ($data) {
            $pass = $data['sandi_fotografer'];

            // $verify_pass = password_verify($password, $pass);
            // debug_to_console($verify_pass);
            // debug_to_console($pass);
            if ($pass == $password) {
                $ses_data = [
                    'id_fotografer'       => $data['id_fotografer'],
                    'username_fotografer'     => $data['username_fotografer'],
                    'email_fotografer'    => $data['email_fotografer'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                // d($data);
                return redirect()->to('/DashboardFotografer');
            } else {
                // d($data);
                $session->setFlashdata('msg', 'Wrong Password');
                // return redirect()->to('/login');
                debug_to_console($data);
            }
        } else {
            // d($data);
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/loginFotografer');
        }
    }



    public function logoutFotografer()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/loginFotografer');
    }
}
