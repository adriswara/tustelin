<?php

namespace App\Controllers;


use App\Models\AliranKomersilModel;
use App\Models\FotograferModel;
use App\Controllers\Profile;
use App\Models\UserModel;
use CodeIgniter\Controller;



class Dashboard extends Controller
{

    protected $fotograferModel;
    public function __construct()
    {
        $this->fotograferModel = new FotograferModel();
        $this->alirankomersilModel = new AliranKomersilModel();
        $this->profile = new Profile();
        $this->userModel = new UserModel();
    }

    public $globalVariable = 'I am callable';

    private $session = null;
    public function index()
    {
        $this->session = session();
        $data['get_sess'] = $this->session->get('username_pengguna');
        $data = [
            'title' => 'Logged',
            'pelanggan' => $this->userModel->getidByUsername($data['get_sess'])
        ];

        //  $namaLog = $session->get('username_pengguna');
        $data['get_sess'] = $this->session->get('username_pengguna');

        //echo $namaLog;
        //$output = ob_get_contents();
        //parse_str($output);
        // echo $output;

        //echo "Welcome back, "  ; //$session->get('username_pengguna');
        //  $data['get_session'] = $this->$namaLog;
        $data['global'] = $this->globalVariable;
        $this->session->sess_expiration = '3600';
        //   $data = [

        //     'title' => 'Loggedin',
        //   'namaLoged' => $namaLog
        // ];
        echo view('logintest/dashboard', $data);
    }
    public function logged()
    {
        $kriteria = $this->profile->criteriaGetter();
        $arraytemp = $this->fotograferModel->joinMarket()->getResult();
        $arrayresult = array();
        foreach ($arraytemp as $key) {
            $arrayresult[] = json_decode(json_encode($key), true);;
        }

        $data = [

            'title' => 'Daftar Fotografer',
            'fotografer' => $arrayresult,
            'kriteria' => $kriteria,
            'filter_aliran' => null,
            'filter_kota' => null,
            'filter_harga' => null,
            'filter_rating' => null,
            'filter_jmlRating' => null

        ];



        $this->session = session();

        $data['get_sess'] = $this->session->get('username_pengguna');

        $data['global'] = $this->globalVariable;

        $keyword = $this->request->getVar('keyword');

        if ($keyword) {
            $this->fotograferModel->search($keyword);
        } else {
            $fotografer = $this->fotograferModel;
        }

        // d($data, $this->session->sess_expiration);

        return view('pages/marketplace_page', $data);

        // return redirect('pages/marketplace_pageLogd', $data);
    }

    public function logedHome()
    {
        $data = [
            'title' => 'Home | Web Fotografi'
        ];

        $this->session = session();

        $data['get_sess'] = $this->session->get('username_pengguna');

        d($data);

        return view('pages/LogDhome_page', $data);
    }
}
