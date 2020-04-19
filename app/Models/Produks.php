<?php namespace App\Models;

use CodeIgniter\Model;

class Produks extends Model
{

  protected $table = 'produk';
  protected $returnType = 'array';
  // protected $allowedFields = ['member_nama', 'member_email', 'member_password', 'create_at', 'delete_at'];
  protected $primaryKey = 'produk_id';


}
