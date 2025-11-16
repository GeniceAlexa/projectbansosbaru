<?php

namespace App\Models;

use CodeIgniter\Model;

class adminuserModel extends Model
{
    protected $table = 'data_user';
    protected $primaryKey = 'id_user';
    protected $allowedFields = ['Nama', 'NIK', 'status', 'tanggal'];
    
    public function getadminuser($id_user = false)
    {
        if ($id_user == false){
            return $this->findAll();
        }

        return $this->where(['id_user' => $id_user])->first();
    }
}
