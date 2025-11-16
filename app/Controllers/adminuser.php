<?php
namespace App\Controllers;

use App\Models\adminuserModel;

class adminuser extends BaseController
{
    protected $adminuserModel;

    public function __construct()
    {
        $this->adminuserModel = new adminuserModel();
    }
    
    public function index() : string 
    {
        $data =[
            'title' => 'Daftar user',
            'adminuser' => $this->adminuserModel->getadminuser()
        ];
        return view('adminuser/pengajuan', $data);
    }

    public function hapus($id_user){
        $this->adminuserModel->delete($id_user);

        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to('/adminuser');
    }
    
    public function edit($id_user){
        $data = [
            'title' => 'from Ubah Data user',
            'validation' => \Config\Services::validation(),
            'adminuser' => $this->adminuserModel->getadminuser($id_user)
        ];

        return view('adminuser/edit', $data);
    }   
    
    public function update($id_user){
        if (!$this->validate([
            'Nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} nama harus diisi',
                ]
            ],
        ])) 
        {
            return redirect()->to('/adminuser/edit/'.$this->request->getVar('id_user'))->withInput();
        }

        $this->adminuserModel->save(
            [
            'id_user' => $id_user,
            'Nama' => $this->request->getVar('Nama'),
            'NIK' => $this->request->getVar('NIK'),
            'status' => $this->request->getVar('status'),
            'tanggal' => $this->request->getVar('tanggal'),
            ]
            );
            session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
            return redirect()->to('/adminuser/')->withInput();
    }
}
