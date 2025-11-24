<?php
namespace App\Controllers;

use App\Models\dokum;

class admindokum extends BaseController
{
    protected $dokum;

    public function __construct()
    {
        $this->dokum = new dokum();
    }

    public function index() : string 
    {
        $data =[
            'title' => 'Daftar admindokum',
            'admindokum' => $this->dokum->getdokumentasi()
        ];
        return view('admindokum/berita', $data);
    }

    public function detail($id_dokumentasi)
    {
        $data =[
            'title' => 'Detail admindokum',
            'admindokum' => $this->dokum->getdokumentasi($id_dokumentasi)
        ];

        return view('admindokum/detail', $data);
    }

    public function tambah(){
        $data = [
            'title' => 'from Tambah Data admindokum',
            'validation' => \Config\Services::validation()
        ];

        return view('admindokum/tambah_data', $data);
    }

    public function simpan()
    {
        if (!$this->validate([
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} admindokum harus diisi',
                ]
            ],
            'gambar'=>[
                'rules'=>'uploaded[gambar]|max_size[gambar,10000]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors'=>[
                    'uploaded' => 'Gambar Wajib diisi',
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'File Wajib gambar',
                    'mime_in' => 'Tipe file gambar tidak sesuai'
                ]
            ]
        ])) {
            return redirect()->to('/admindokum/tambah')->withInput();
        }

        $filegambar = $this->request->getFile('gambar');
        $filegambar->move('img');
        $nmgambar = $filegambar->getName();
        
        // simpan ke database
        $this->dokum->save([
            'judul' => $this->request->getVar('judul'),
            'wilayah' => $this->request->getVar('wilayah'),
            'gambar' => $nmgambar,
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->to('/admindokum');
    }

    public function hapus($id_dokumentasi){
        $this->dokum->delete($id_dokumentasi);

        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to('/admindokum');
    }
    
    // Minimal debug endpoint: returns last 5 dokumentasi rows as JSON
    public function latest()
    {
        $rows = $this->dokum->orderBy('id_dokumentasi', 'DESC')->findAll(5);
        return $this->response->setJSON($rows);
    }
    
}