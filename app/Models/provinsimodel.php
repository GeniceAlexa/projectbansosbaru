<?php

namespace App\Models;

use CodeIgniter\Model;

class provinsimodel extends Model
{
    protected $table = 'provinsi'; // Pastikan nama tabel benar
    protected $primaryKey = 'id'; 
    protected $allowedFields = ['nama_provinsi'];
}
?>