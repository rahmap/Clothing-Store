<?php namespace App\Controllers;

use App\Models\Dashboard_Model;

class Dashboard extends BaseController
{

	protected $DM;

	public function __construct()
	{
		// if(!session()->has('admin_id')){
		// 	header('Location: '.base_url());
		// 	exit;
		// }
		$this->DM = new Dashboard_Model();
	}
	public function index()
	{
    $data = [
      'title' => 'Welcome'
    ];
		return view('dashboard/welcome', $data);
	}

	public function tambah_produk()
	{
		// dd(validation()->listErrors());
		$data = [
			'title' => 'Tambah Produk'
		];
		
		if($this->request->getPost()){
			if (!$this->validate('uploadProduk')) {
				return view('dashboard/tambah-produk', $data);
			} else {
				// dd($this->request->getPost());
				$slug = strtolower(str_replace(' ','-', $this->request->getPost('judulProduk')));
				$request = [
					'slug' => $slug,
					'judul_produk' => $this->request->getPost('judulProduk'),
					'diskon_produk' => $this->request->getPost('diskonProduk'),
					'harga_produk' => $this->request->getPost('hargaProduk'),
					'keterangan_tumb' => $this->request->getPost('keteranganTumb'),
					'fk_kategori' => $this->request->getPost('kategori'),
					'brand_produk' => $this->request->getPost('brandProduk')
				];
				if($this->DM->addProduk($request)){
					session()->setFlashdata('message', $this->free->sweetAlert('Horayy!','Berhasil menambahkan data gejala.', 'success'));
				} else {
					session()->setFlashdata('message', $this->free->sweetAlert('Upss!','Gagal menambahkan data gejala.', 'success'));
				}
				return view('dashboard/tambah-produk', $data);
			}
		} else {
			return view('dashboard/tambah-produk', $data);
		}
	}

	//--------------------------------------------------------------------

}
