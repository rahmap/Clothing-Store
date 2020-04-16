<?php namespace App\Models;

use CodeIgniter\Model;

class Dashboard_Model extends Model
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

  public function addProduk($data)
  {
    return $this->produk->insert($data); 
  }

  public function addKategori($data)
  {
    return $this->kategori->insert($data); 
  }

  public function getAllKategori()
  {
    return $this->kategori->get()->getResultArray();
  }

}
