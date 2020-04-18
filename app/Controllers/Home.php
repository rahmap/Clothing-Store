<?php namespace App\Controllers;

use App\Models\Home_Model;

class Home extends BaseController
{

	protected $HM;

	public function __construct()
	{
		// if(!session()->has('aHMin_id')){
		// 	header('Location: '.base_url());
		// 	exit;
		// }
		$this->HM = new Home_Model();
	}

	public function index()
	{
		$data = [
			'title' => 'Welcome',
			'produk' => $this->HM->getAllProduk(),
			'recentProduk' => $this->HM->getRecentProduk(),
			'kategori' => $this->HM->getAllKategori()
		];
		// dd($data);
		return view('home/home', $data);
	}

	public function detail()
	{
		$data = [
			'title' => ucwords(str_replace('-',' ', $this->request->uri->getSegment(1))),
			'randomProduk' => $this->HM->getRandomProduk(),
			'produk' => $this->HM->getDetailProduk($this->request->uri->getSegment(1))
		];
		return view('home/detail-produk', $data);
	}

	public function kategori()
	{
		$data = [
			'title' => ucwords(str_replace('-',' ', $this->request->uri->getSegment(1))),
			'produk' => $this->HM->getDetailProduk($this->request->uri->getSegment(1))
		];
		dd($data);
		return view('home/detail-produk', $data);
	}

}
