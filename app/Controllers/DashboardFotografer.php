<?php

namespace App\Controllers;


use App\Models\AliranKomersilModel;
use App\Models\FotograferModel;
use App\Models\AdminModel;
use App\Models\PemesananModel;
use CodeIgniter\Controller;



class DashboardFotografer extends Controller
{

    protected $fotograferModel;
    public function __construct()
    {
        $this->fotograferModel = new FotograferModel();
        $this->alirankomersilModel = new AliranKomersilModel();
        $this->adminModel = new AdminModel();
        $this->profile = new Profile();
        $this->pemesananModel = new PemesananModel();
    }

    public $globalVariable = 'I am callable';

    private $session = null;

    public function index()
    {
        $this->session = session();
        $data = [
            'title' => 'Logged',
            'fotografer' => $this->fotograferModel->getLoginProfile($this->session->get('username_fotografer')),
            'listPesan' => $this->pemesananModel->getPemesananByName($this->session->get('username_fotografer'))
        ];


        //  $namaLog = $session->get('username_pengguna');
        $data['fotografer_sess'] = $this->session->get('username_fotografer');

        //echo $namaLog;
        //$output = ob_get_contents();
        //parse_str($output);
        // echo $output;

        //echo "Welcome back, "  ; //$session->get('username_pengguna');
        //  $data['admin_session'] = $this->$namaLog;
        $data['global'] = $this->globalVariable;
        $this->session->sess_expiration = '3600';
        //   $data = [

        //     'title' => 'Loggedin',
        //   'namaLoged' => $namaLog
        // ];
        echo view('logintest/dashboardFotografer', $data);
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

        $data['fotografer_sess'] = $this->session->get('username_fotografer');

        $data['global'] = $this->globalVariable;

        $keyword = $this->request->getVar('keyword');

        if ($keyword) {
            $this->fotograferModel->search($keyword);
        } else {
            $fotografer = $this->fotograferModel;
        }



        return view('pages/marketplace_page', $data);

        // return redirect('pages/marketplace_pageLogd', $data);
    }

    public function logedHome()
    {
        $data = [
            'title' => 'Home | Web Fotografi'
        ];

        $this->session = session();

        $data['fotografer_sess'] = $this->session->get('username_fotografer');



        return view('pages/LogDhome_page', $data);
    }
}
