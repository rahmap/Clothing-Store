<?php namespace App\Controllers;

class Home extends BaseController
{

	public function index()
	{
		$data = [
			'title' => 'Welcome'
		];
		// dd($this->image);
		return view('home/home', $data);
	}

	public function detail()
	{
		$data = [
			'title' => 'Detail Produk'
		];
		return view('home/detail-produk', $data);
	}

}
