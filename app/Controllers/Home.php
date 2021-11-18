<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		// return view('welcome_message');
		return view('home_page');
		// echo "Hello World!";
	}

	public function profile()
	{
		return view('profile_page');
	}

	public function marketplace()
	{
		return view('marketplace_page');
	}
}
