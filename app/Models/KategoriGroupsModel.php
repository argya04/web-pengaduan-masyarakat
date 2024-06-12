<?php

namespace App\Models;

Use CodeIgniter\Model;

class KategoriGroupsModel extends Model
{
    protected $table            = 'kat_group';
    protected $primaryKey       = 'id_kat';
    // protected $usetimestamp      = true;
    protected $allowedFields    = ['group_id','kategori_id'];
}