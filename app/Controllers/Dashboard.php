<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends Controller
{
    public $globalVariable = 'I am callable';

    private $session = null;
    public function index()
    {
        $this->session = session();
        //  $namaLog = $session->get('username_pengguna');
        $data['get_sess'] = $this->session->get('username_pengguna');
        //echo $namaLog;
        //$output = ob_get_contents();
        //parse_str($output);
        // echo $output;

        //echo "Welcome back, "  ; //$session->get('username_pengguna');
        //  $data['get_session'] = $this->$namaLog;
        $data['global'] = $this->globalVariable;
        //   $data = [

        //     'title' => 'Loggedin',
        //   'namaLoged' => $namaLog
        // ];
        echo view('logintest/dashboard', $data);
    }
}
