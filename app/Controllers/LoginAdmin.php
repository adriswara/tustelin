<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AdminModel;
use CodeIgniter\CLI\Console;

class LoginAdmin extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Login Admin'
        ];

        helper(['form']);
        echo view('logintest/loginAdmin', $data);
    }

    public function auth()
    {
        $session = session();
        $model = new AdminModel();
        $email = $this->request->getVar('email_admin');
        $password = $this->request->getVar('password_admin');
        $data = $model->where('email_admin', $email)->first();
        d($data);
        function debug_to_console($data)
        {
            $output = $data;
            if (is_array($output))
                $output = implode(',', $output);

            echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
            d($data);
        }


        if ($data) {
            $pass = $data['password_admin'];

            // $verify_pass = password_verify($password, $pass);
            // debug_to_console($verify_pass);
            // debug_to_console($pass);
            if ($pass == $password) {
                $ses_data = [
                    'id_admin'       => $data['id_admin'],
                    'username_admin'     => $data['username_admin'],
                    'email_admin'    => $data['email_admin'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                d($data);
                return redirect()->to('/dashboardAdmin');
            } else {
                d($data);
                $session->setFlashdata('msg', 'Wrong Password');
                // return redirect()->to('/login');
                debug_to_console($data);
            }
        } else {
            d($data);
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/loginAdmin');
        }
    }



    public function logoutAdmin()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/loginAdmin');
    }
}
