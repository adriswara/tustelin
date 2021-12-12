<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		// return view('welcome_message');
		// echo "Hello World!";

		$data = [
			'title' => 'Home | Web Fotografi'
		];

		echo view('layout/header', $data);
		echo view('pages/home_page');
		echo view('layout/footer');
	}

	public function profile()
	{

		$data = [
			'title' => 'Profile |'
		];

		echo view('layout/header', $data);
		echo view('pages/profile_page');
		echo view('layout/footer');
	}

	public function marketplace()
	{

		$data = [
			'title' => 'Marketplace |'
		];

		echo view('layout/header', $data);
		echo view('pages/marketplace_page');
		echo view('layout/footer');
	}
}
