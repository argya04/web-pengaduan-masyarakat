<?php

namespace App\Models;

Use CodeIgniter\Model;

class PengaduanModel extends Model
{
 protected $table            = 'pengaduan';
 protected $primaryKey       = 'id_pengaduan';
 protected $usetimestamp      = true;
 protected $allowedFields    = ['username','tgl_pengaduan', 'nik', 'no_telepon', 'id_kategori', 'judul_laporan', 'isi_laporan', 'foto', 'status'];


function getNumber()
{
  $query = $this->get();
  $lp = $query->getNumRows();
  return $lp;
}

function ambilKategori($id=null)
{
  $this->select('kategori.id_kategori, nama_kategori', 'users.id, username,');
  $this->join('kategori', 'kategori.id_kategori=pengaduan.id_kategori');
  $this->where('pengaduan.id_pengaduan',$id);
  $query= $this->get();
  return $query->getRow();
}



public function tot_pengaduan()
{
    return $this->db->table('pengaduan')->countAll();
}


 public function tampil(){
   $query = $this->findAll();
   return $query;
}


function getTanggapan($id=null)
{
  $this->select('*');
  $this->join('tanggapan', 'tanggapan.id_pengaduan=pengaduan.id_pengaduan');
  $this->where('pengaduan.id_pengaduan', $id);
  $query =$this->get();
  return $query->getRow();
}




}