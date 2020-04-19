<?php namespace App\Models;

use CodeIgniter\Model;

class Home_Model extends Model
{

  protected $db;
  protected $produk;
  protected $kategori;

  public function __construct()
  {
    $this->db = \Config\Database::connect();
    $this->produk = $this->db->table('produk');
    $this->kategori = $this->db->table('kategori');

  }

  public function getAllKategori()
  {
    return $this->kategori->get()->getResultArray();
  }

  public function getAllProduk()
  {
    return $this->produk->where('delete_at', 0)->get()->getResultArray();
  }

  public function getDetailProduk($slug)
  {
    return $this->produk->where('slug', $slug)->get()->getRowArray();
  }

  public function getRecentProduk()
  {
    return $this->produk
    ->where(['delete_at' => 0])
    ->limit(4)
    ->orderBy('create_at', 'DESC')
    ->get()
    ->getResultArray();
  }

  public function getRandomProduk()
  {
    return $this->produk
    ->where(['delete_at' => 0])
    ->limit(5)
    ->orderBy('produk_id', 'RANDOM')
    ->get()
    ->getResultArray();
  }

  public function getProdukByKategori($kategori)
  {
    return $this->produk->join('kategori', 'kategori.kategori_id=produk.fk_kategori')
                        ->where('kategori.slug', $kategori)->get()->getResultArray();
  }

}
