<?php

namespace App\Models;

Use CodeIgniter\Model;

class TanggapanModel extends Model
{
    
 protected $table            = 'tanggapan';
 protected $primaryKey       = 'id_tanggapan';
 protected $useAutoIncrement = true;
 protected $allowedFields    = ['id_pengaduan', 'tgl_tanggapan', 'isi_tanggapan', 'id_petugas','foto'];

 public function getTanggapan(){
    return $this->db->table('tanggapan')
    ->join('pengaduan','pengaduan.id_pengaduan=tanggapan.id_pengaduan')
    ->join('users','users.id=tanggapan.id_petugas')->get()->getResultArray();

}
public function tampil(){
    $query = $this->findAll();
    return $query;
 }

 public function tot_tanggapan()
{
    return $this->db->table('tanggapan')->countAll();
}

}