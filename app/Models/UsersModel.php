<?php namespace App\Models;

Use CodeIgniter\Model;

class UsersModel extends Model
{
    
 protected $table            = 'users';
 protected $primaryKey       = 'id';
 protected $useAutoIncrement = true;
 protected $allowedFields = [
    'nik','nama', 'alamat','no_telepon', 'tgl_lahir','email', 'username', 'password_hash', 'reset_hash', 'reset_at', 'reset_expires', 'activate_hash',
    'status', 'status_message', 'active', 'force_pass_reset', 'permissions', 'created_at', 'deleted_at',
];

public function tot_users()
{
    return $this->db->table('users')->countAll();
}

public function getUsers(){
    return $this->db->table('users')
    ->join('pengaduan','pengaduan.username=users.username')->get()->getResultArray();
  
  }

}