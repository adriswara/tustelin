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


		echo view('pages/home_page', $data);
	}

	public function profile()
	{

		$data = [
			'title' => 'Profile |'
		];

		echo view('pages/profile_page', $data);
	}

	public function marketplace()
	{

		$data = [
			'title' => 'Marketplace |'
		];

		echo view('pages/marketplace_page', $data);
	}
}
