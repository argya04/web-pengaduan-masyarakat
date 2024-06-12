<?php

namespace App\Models;

Use CodeIgniter\Model;

class TolakPengaduanModel extends Model
{
 protected $table            = 'pengaduan_ditolak';
 protected $primaryKey       = 'id_ditolak';
 protected $useAutoIncrement = true;
 protected $allowedFields    = ['id_pengaduan', 'id_petugas','alasan','tgl_ditolak'];

 public function getTolak(){
    return $this->db->table('pengaduan_ditolak')->join('pengaduan','pengaduan.id_pengaduan=pengaduan_ditolak.id_pengaduan')
    ->join('users','users.id=pengaduan_ditolak.id_petugas')->get()->getResultArray();

}

public function tot_tolak()
{
    return $this->db->table('pengaduan_ditolak')->countAll();
}

}