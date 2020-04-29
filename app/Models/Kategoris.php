<?php namespace App\Models;

use CodeIgniter\Model;

class Kategoris extends Model
{

  protected $table = 'kategori';
  protected $returnType = 'array';
  // protected $allowedFields = ['member_nama', 'member_email', 'member_password', 'create_at', 'delete_at'];
  protected $primaryKey = 'kategori_id';

  function article()
  {
    return $this->belongsTo('Produks');
  }
}
