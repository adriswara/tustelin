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
		return view('pages/profile_page');
	}

	public function marketplace()
	{
		return view('pages/marketplace_page');
	}
}
