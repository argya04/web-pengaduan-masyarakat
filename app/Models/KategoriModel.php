<?php

namespace App\Models;

Use CodeIgniter\Model;

class KategoriModel extends Model
{
 protected $table            = 'kategori';
 protected $primaryKey       = 'id_kategori';
 protected $allowedFields    = ['id_kategori' ,'nama_kategori'];

 public function tampil(){
     $query = $this->findAll();
     return $query;
 }

 public function getKategori()
 {
   $kategori = $this->get();
   return $kategori->getResult();
  
}

// function ambilKategori($id=null)
// {
//   $this->select('    ');
//   $this->join('pengaduan', 'pengaduan.id_kategori=kategori.id_kategori');
//   $this->where('pengaduan.id_pengaduan',$id);
//   $query= $this->get();
//   return $query->getResultArray();
// }


 public function tot_kategori()
{
    return $this->db->table('kategori')->countAll();
}

}