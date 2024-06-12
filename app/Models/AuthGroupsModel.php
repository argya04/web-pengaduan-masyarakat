<?php

namespace App\Models;

Use CodeIgniter\Model;

class AuthGroupsModel extends Model
{
    protected $table            = 'auth_groups';
    protected $primaryKey       = 'id';
    // protected $usetimestamp      = true;
    protected $allowedFields    = ['name','description'];
}