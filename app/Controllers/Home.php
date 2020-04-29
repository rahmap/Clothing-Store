<?php namespace App\Controllers;

use App\Models\Home_Model;
use App\Models\Produks;

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
		$produk = new Produks();
		$data = [
			'title' => 'Welcome',
			'produk' => $produk->where('delete_at', 0)->paginate(6),
			'recentProduk' => $this->HM->getRecentProduk(),
			'kategori' => $this->HM->getAllKategori(),
			'pager' => $produk->pager
		];
		// dd($pager);
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

	public function kategori($kategori)
	{
		$produk = new Produks();
		$data = [
			'kategori' => $this->HM->getAllKategori(),
			'recentProduk' => $this->HM->getRecentProduk(),
			'title' => ucwords(str_replace('-',' ', $this->request->uri->getSegment(1))),
			'produk' => $produk->join('kategori', 'kategori.kategori_id=produk.fk_kategori')
									->where(['kategori.slug' => $kategori, 'delete_at', 0])->paginate(6),
			'pager' => $produk->pager
		];
		// dd($data);
		return view('home/HomeByKategori', $data);
	}

}
