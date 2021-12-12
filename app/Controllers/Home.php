<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		// return view('welcome_message');
		// echo "Hello World!";
		echo view('layout/header');
		echo view('pages/home_page');
		echo view('layout/footer');
	}

	public function profile()
	{
		echo view('layout/header');
		echo view('pages/profile_page');
		echo view('layout/footer');
	}

	public function marketplace()
	{
		echo view('layout/header');
		echo view('pages/marketplace_page');
		echo view('layout/footer');
	}
}
