<?php

namespace App\Controllers;

use App\Models\FotograferModel;

class Home extends BaseController
{
	protected $fotograferModel;
	public function __construct()
	{
		$this->fotograferModel = new FotograferModel();
	}
	public function index()
	{
		// return view('welcome_message');
		// echo "Hello World!";

		$data = [
			'title' => 'Home | Web Fotografi'
		];


		echo view('pages/home_page', $data);
	}

	public function profile()
	{


		$data = [
			'title' => 'Profile |'
		];

		echo view('pages/profile_page', $data);
	}



	// public function marketplace()
	// {

	// 	$data = [
	// 		'title' => 'Marketplace |'
	// 	];

	// 	$fotograferVar = $this->fotograferModel->findAll();


	// 	$data = [

	// 		'title' => 'Daftar Fotografer',
	// 		'fotografer' => $fotograferVar
	// 	];

	// 	//$fotograferModel = new \App\Models\FotograferModel();





	// 	// return view('fotografer/index', $data);
	// 	return view('pages/marketplace_page', $data);

	// 	//echo view('pages/marketplace_page', $data);
	// }
	// public function profileSegment($slug)
	// {
	// 	echo $slug;
	// }
}
