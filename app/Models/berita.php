<?php

    namespace App\Models;
    
    use CodeIgniter\Model;
    
    class berita extends Model
    {
        protected $table = 'berita';
        protected $primaryKey = 'id_berita';
        protected $allowedFields= ['judul', 'gambar', 'deskripsi'];
        
        public function getberita($idberita = false)
        {
            if ($idberita == false){
                return $this ->findAll();
            }

            return $this->where(['id_berita' => $idberita])->first();
        }
    }

