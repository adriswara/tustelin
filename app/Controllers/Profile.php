<?php

namespace App\Controllers;

use App\Models\AliranKomersilModel;
use App\Models\FotograferModel;
use App\Models\KotaModel;
use App\Models\ReviewModel;
use App\Models\UserModel;
use App\Models\AdminModel;
use App\Models\FotoModel;
use App\Models\AlatModel;

class Profile extends BaseController
{
    protected $fotograferModel;
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
    }



    public function index()
    {

        $kriteria = $this->criteriaGetter();
        $keyword = $this->request->getVar('keyword');
        // $joins = $this->fotograferModel->join();
        if ($keyword) {
            $arrayResult = $this->fotograferModel->search($keyword);
        } else {
            //$arrayResult = $this->fotograferModel;
            $arraytemp = $this->fotograferModel->joinMarket()->getResult();
            $arrayResult = array();
            foreach ($arraytemp as $key) {
                $arrayResult[] = json_decode(json_encode($key), true);
            }
        }
        $data = [

            // 'fotografer' => $this->fotograferModel->getFotografer(),
            'title' => 'Daftar Fotografer',
            'fotografer' => $arrayResult,
            'kriteria' => $kriteria,
            'filter_aliran' => null,
            'filter_kota' => null,
            'filter_harga' => null,
            'filter_rating' => null,
            'filter_jmlRating' => null
        ];
        // $data = json_decode($data, true);

        //$fotograferModel = new \App\Models\FotograferModel();

        // return view('fotografer/index', $data); 
        return view('pages/marketplace_page', $data);

        //echo view('pages/marketplace_page', $data);
    }
    public function market_filter($filter_aliran = null, $filter_kota = null, $filter_harga = null, $filter_rating = null, $filter_jmlRating = null)
    {


        if ($filter_aliran == null) {
            $filter_aliran = $this->request->getVar('filter_aliran[]');
        }

        if ($filter_kota == null) {
            $filter_kota = $this->request->getVar('filter_kota[]');
        }


        if ($filter_harga == null) {
            $filter_harga = $this->request->getVar('filter_harga[]');
        }

        if ($filter_rating == null) {
            $filter_rating = $this->request->getVar('filter_rating[]');
        }

        if ($filter_jmlRating == null) {
            $filter_jmlRating = $this->request->getVar('filter_jmlRating[]');
        }



        $kriteria = $this->criteriaGetter();
        // if nya fingger crossed
        // if ($filter_kota) {
        //     $filterResult = $this->fotograferModel->filter($filter_kota);
        // }
        if ($filter_aliran || $filter_kota || $filter_harga || $filter_rating || $filter_jmlRating) {
            $filterResult = $this->fotograferModel->filter($filter_aliran, $filter_kota, $filter_harga, $filter_rating, $filter_jmlRating);
        } else {
            $arraytemp = $this->fotograferModel->joinMarket()->getResult();
            $filterResult = array();
            foreach ($arraytemp as $key) {
                $filterResult[] = json_decode(json_encode($key), true);
            }
        }
        $data = [

            'title' => 'Daftar Fotografer',
            // 'fotografer' => $this->fotograferModel->getFotografer(),
            'fotografer' => $filterResult,
            'kriteria' => $kriteria,
            'filter_aliran' => $filter_aliran,
            'filter_kota' => $filter_kota,
            'filter_harga' => $filter_harga,
            'filter_rating' => $filter_rating,
            'filter_jmlRating' => $filter_jmlRating

        ];



        return view('pages/marketplace_page', $data);
    }
    public function profileSegment($slug)
    {
        $kriteria = $this->criteriaGetter();
        $profil = $this->fotograferModel->getProfil($slug);

        $data = [
            'title' => 'Profil Fotografer',
            'kriteria' => $kriteria,
            'profil' => $this->fotograferModel->getProfil($slug),
            'alatLain' => $this->fotograferModel->getKepemilikan($slug),
            'fotoGallery' => $this->fotograferModel->getFotoByProfile($slug)
        ];
        // dd($data);
        // dd(current_url());
        $this->session = session();

        $data['get_sess'] = $this->session->get('username_pengguna');
        $data['admin_sess'] = $this->session->get('username_admin');
        $data['fotografer_sess'] = $this->session->get('username_fotografer');
        $this->currSlug = $slug;


        if (empty($data['profil'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Fotografer ' . $slug . ' tidak ditemukan atau profil tidak layak');
        }

        // dd($data);
        return view('pages/profile_page', $data);
    }


    public function criteriaGetter()
    {
        $dataKota = $this->kotaModel->findAll();
        $dataAliran = $this->alirankomersilModel->findAll();

        $result = [

            // 'fotografer' => $this->fotograferModel->getFotografer(),
            'kota' => $dataKota,
            'aliran' => $dataAliran
        ];


        return $result;
    }

    //form masukan
    public function saveReview($slug = null, $pilihanRating = null)
    {


        if ($pilihanRating == null) {
            $pilihanRating = $this->request->getVar('inputRating[]');
        }

        if (strcmp($pilihanRating, 'inputRating1') == 0) {
            $pilihanRating = 1;
            d('rating a masuk');
        } elseif (strcmp($pilihanRating, 'inputRating2') == 0) {
            $pilihanRating = 2;
            d('filter b masuk');
        } elseif (strcmp($pilihanRating, 'inputRating3') == 0) {
            $pilihanRating = 3;
            d('filter c masuk');
        } elseif (strcmp($pilihanRating, 'inputRating4') == 0) {
            $pilihanRating = 4;
            d('filter d masuk');
        } elseif (strcmp($pilihanRating, 'inputRating5') == 0) {
            $pilihanRating = 5;
            d('filter e masuk');
        }

        $this->session = session();
        //butuh return method berdsasarkan slug
        //return select id where w=slug - slug
        $profilFotografer = $slug;
        $profilUser = $this->session->get('username_pengguna');


        $varIdFotografer = $this->fotograferModel->getidBySlug($profilFotografer);
        $varIdPelanggan = $this->userModel->getidbyUsername($profilUser);
        $this->reviewModel->save([
            'id_fotografer' => $varIdFotografer['id_fotografer'],
            'id_pengguna' => $varIdPelanggan['id_pengguna'],
            'review' => $this->request->getVar('review'),
            'rating' => $pilihanRating


        ]);
        session()->setFlashdata('pesan', 'Input Review berhasil');
        //auto count rata rata dan riwayat
        $avgRating = $this->reviewModel->avgReview($varIdFotografer['id_fotografer']);
        $sumRating = $this->reviewModel->sumReview($varIdFotografer['id_fotografer']);
        $this->avgRatingFotografer($varIdFotografer['id_fotografer'], $avgRating);
        $this->sumRatingFotografer($varIdFotografer['id_fotografer'], $sumRating);
        d($avgRating);
        d($sumRating);
        d($varIdFotografer['id_fotografer']);
        d($varIdPelanggan['id_pengguna']);
        d($this->avgRatingFotografer($varIdFotografer['id_fotografer'], $avgRating));
        d($this->sumRatingFotografer($varIdFotografer['id_fotografer'], $sumRating));
        return redirect()->to('/Profile/' . $slug);
    }


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

    public function editProfil()
    {
    }
    public function updateProfil()
    {
    }

    public function createFoto($id = null, $slug = null)
    {
        $this->session = session();

        $data = [
            'title' => 'Form Tambah Data Foto',
            'validation' => \Config\Services::validation(),
            'fotografer' => $this->fotograferModel->getFotografer($slug),
            'profil' => $this->fotograferModel->getProfil($slug),
            'alatLain' => $this->fotograferModel->getKepemilikan($slug),
            'fotoGallery' => $this->fotograferModel->getFotoByProfile($slug),
            'foto' => $this->fotoModel->getFoto($id)
        ];



        $data['fotografer_sess'] = $this->session->get('username_fotografer');

        return view('pages/createFoto', $data);
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

            return redirect()->to('pages/createFoto')->withInput();
        }

        $fileFoto = $this->request->getFile('file_foto');

        $signatureFoto = $this->request->getVar('judul');
        $idFotografer = $this->request->getVar('id_fotografer');
        $imgName = $idFotografer . $signatureFoto . '.' . $fileFoto->guessExtension();

        $fileFoto->move('file_foto', $imgName); //move ke nama folder display pic di public
        $this->fotoModel->save([
            'judul' => $this->request->getVar('judul'),
            'id_fotografer' => $idFotografer,
            'file_foto' => $imgName

        ]);


        session()->setFlashdata('pesan', 'Input berhasil');

        return redirect()->to('/profile');
    }

    public function editGallery($slug = null)
    {

        $this->session = session();


        $data = [
            'title' => 'Form Ubah Data Fotografer',
            'validation' => \Config\Services::validation(),
            'fotografer' => $this->fotograferModel->getFotografer($slug),
            'profil' => $this->fotograferModel->getProfil($slug),
            'alatLain' => $this->fotograferModel->getKepemilikan($slug),
            'fotoGallery' => $this->fotograferModel->getFotoByProfile($slug)
        ];



        $data['fotografer_sess'] = $this->session->get('username_fotografer');



        return view('pages/tableGallery', $data);
    }

    public function editFoto($id = null, $slug = null)
    {

        $this->session = session();



        $data = [
            'title' => 'Form Ubah Data Foto',
            'validation' => \Config\Services::validation(),
            'foto' => $this->fotoModel->getFoto($id),
            'fotoGallery' => $this->fotograferModel->getFotoByProfile($slug),
            'fotografer' => $this->fotograferModel->getLoginProfile($this->session->get('username_fotografer'))
        ];





        $data['fotografer_sess'] = $this->session->get('username_fotografer');



        return redirect()->to('/DashboardFotografer');
    }


    public function updateFoto($id)
    {
        $slug = $this->request->getVar('slug');

        if (!$this->validate([

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

            return redirect()->to('pages/editGallery')->withInput();
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

        $this->session = session();



        $data = [
            'title' => 'Form Ubah Data Foto',
            'validation' => \Config\Services::validation(),
            'foto' => $this->fotoModel->getFoto($id),
            'fotoGallery' => $this->fotograferModel->getFotoByProfile($slug),
            'fotografer' => $this->fotograferModel->getLoginProfile($this->session->get('username_fotografer'))
        ];





        $data['fotografer_sess'] = $this->session->get('username_fotografer');



        session()->setFlashdata('pesan', 'Edit berhasil');

        return redirect()->to('/DashboardFotografer');
    }
    public function deleteFoto($id)
    {
        $this->session = session();
        $data['fotografer_sess'] = $this->session->get('username_fotografer');

        $slug = $this->fotograferModel->getSlugByName($data['fotografer_sess']);

        $this->fotoModel->where('id_foto', $id)->delete();
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/DashboardFotografer');
    }
}
