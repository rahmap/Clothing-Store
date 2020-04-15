<?php namespace App\Models;

use CodeIgniter\Model;

class Dashboard_Model extends Model
{

  protected $db;
  protected $member;

  public function __construct()
  {
    $this->db = \Config\Database::connect();
    $this->member = $this->db->table('member');

  }

  public function addProduk($data)
  {

  }

}
