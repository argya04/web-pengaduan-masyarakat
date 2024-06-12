<?php

namespace App\Models;

Use CodeIgniter\Model;

class AuthGroupsUsersModel extends Model
{
    protected $table            = 'auth_groups_users';
    protected $primaryKey       = 'user_id';
    // protected $usetimestamp      = true;
    protected $allowedFields    = ['group_id','user_id'];
}