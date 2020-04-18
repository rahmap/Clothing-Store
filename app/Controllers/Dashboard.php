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
		$data = [
			'title' => 'Tambah Produk',
			'kategori' => $this->DM->getAllKategori()
		];
		
		if($this->request->getPost()){
			if (!$this->validate('uploadProduk')) {
				return view('dashboard/tambah-produk', $data);
			} else {
				$slug = strtolower(str_replace(' ','-', $this->request->getPost('judulProduk')));
				$foto = ['fotoDepan', 'fotoBelakang', 'fotoRelatedDepan', 'fotoRelatedBelakang'];
				foreach ($foto as $key => $val) {
					$foto_gd2 = $this->request->getFile($val);

					if($val == 'fotoDepan'){
						$lebar = 403; $tinggi = 545;
						$nama['fotoDepan'] = 'FD_'.$foto_gd2->getRandomName();
					} else if ($val == 'fotoBelakang') {
						$lebar = 403; $tinggi = 545;
						$nama['fotoBelakang'] = 'FB_'.$foto_gd2->getRandomName();
					} else if ($val == 'fotoRelatedDepan') {
						$lebar = 348; $tinggi = 400;
						$nama['fotoRelatedDepan'] = 'FRD_'.$foto_gd2->getRandomName();
					} else if($val == 'fotoRelatedBelakang'){
						$lebar = 348; $tinggi = 400;
						$nama['fotoRelatedBelakang'] = 'FRB_'.$foto_gd2->getRandomName();
					}
					$this->image->withFile($foto_gd2)->resize($lebar, $tinggi);

					if(!$this->image->save('produk/'.$nama[$val], 100))
					{
						unlink('produk/'.$nama['fotoDepan']);
						unlink('produk/'.$nama['fotoBelakang']);
						unlink('produk/'.$nama['fotoRelatedDepan']);
						unlink('produk/'.$nama['fotoRelatedBelakang']);
						session()->setFlashdata('message', $this->free->sweetAlert('Upss!','Gagal menambahkan data produk! Foto Error.', 'error'));
						return redirect()->to(\base_url('dashboard/tambah_produk'));
					}
				}

				$request = [
					'slug' => $slug,
					'judul_produk' => ucwords($this->request->getPost('judulProduk')),
					'diskon_produk' => $this->request->getPost('diskonProduk'),
					'harga_produk' => $this->request->getPost('hargaProduk'),
					'keterangan' => ucfirst($this->request->getPost('keterangan')),
					'keterangan_tumb' => ucfirst($this->request->getPost('keteranganTumb')),
					'fk_kategori' => $this->request->getPost('kategori'),
					'brand_produk' => ucwords($this->request->getPost('brandProduk')),
					'foto_depan' => $nama['fotoDepan'],
					'foto_belakang' => $nama['fotoBelakang'],
					'fr_depan' => $nama['fotoRelatedDepan'],
					'fr_belakang' => $nama['fotoRelatedBelakang'],
					'delete_at' => 0,
					'create_at' => time()
				];

				if($this->DM->addProduk($request)){
					session()->setFlashdata('message', $this->free->sweetAlert('Horayy!','Berhasil menambahkan data produk.', 'success'));
				} else {
					session()->setFlashdata('message', $this->free->sweetAlert('Upss!','Gagal menambahkan data produk.', 'success'));
					unlink('produk/'.$nama['fotoDepan']);
					unlink('produk/'.$nama['fotoBelakang']);
					unlink('produk/'.$nama['fotoRelatedDepan']);
					unlink('produk/'.$nama['fotoRelatedBelakang']);
				}
				return redirect()->to(\base_url('dashboard/tambah_produk'));
			}
		} else {
			return view('dashboard/tambah-produk', $data);
		}
	}

	public function tambah_kategori()
	{
		$data = [
			'title' => 'Tambah Kategori'
		];
		if($this->request->getPost()){
			if (!$this->validate('addKategori')) {
				return view('dashboard/tambah-kategori', $data);
			} else {
				
				$request = [
					'kategori_nama' => ucwords($this->request->getPost('kategori')),
					'slug' => strtolower(str_replace(' ','-', $this->request->getPost('kategori')))
				];

				if($this->DM->addKategori($request)){
					session()->setFlashdata('message', $this->free->sweetAlert('Horayy!','Berhasil menambahkan data kategori.', 'success'));
				} else {
					session()->setFlashdata('message', $this->free->sweetAlert('Upss!','Gagal menambahkan data kategori.', 'success'));
				}
				return redirect()->to(\base_url('dashboard/tambah_kategori'));
			}
		} else {
			return view('dashboard/tambah-kategori', $data);
		}
	}

}
