<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		// return view('welcome_message');
		return view('pages/home_page');
		// echo "Hello World!";
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
