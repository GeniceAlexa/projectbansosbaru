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
            'adminuser' => $this->adminuserModel->where ('status !=', 'disetujui')->findAll()
        ];
        return view('adminuser/pengajuan', $data);
    }

    public function tdokum()
    {
        return view('adminuser/tdokum');
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
    
     public function update($id_user)
{
    if (!$this->validate([
        'nama' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Nama harus diisi',
            ]
        ],
    ])) 
    {
        $kembali = $this->request->getVar('return') ?? '';

        if ($kembali === 'penerima') {
            return redirect()->to('/adminuser/edit_penerima/'.$id_user)->withInput();
        }

        return redirect()->to('/adminuser/edit/'.$id_user)->withInput();
    }

    // SIMPAN DATA
    $this->adminuserModel->save([
        'id_user' => $id_user,
        'nama' => $this->request->getVar('nama'),
        'nik'  => $this->request->getVar('nik'),
        'email' => $this->request->getVar('email'),
        'no_hp' => $this->request->getVar('no_hp'),
        'alamat' => $this->request->getVar('alamat'),
        'status' => $this->request->getVar('status'),
        'tanggal' => $this->request->getVar('tanggal'),
    ]);

    session()->setFlashdata('pesan', 'Data Berhasil Diupdate');

    // Redirect sesuai konteks
    $kembali = $this->request->getVar('return') ?? '';

    if ($kembali === 'penerima') {
        return redirect()->to('/adminuser/penerima');
    }

    return redirect()->to('/adminuser');
}

      public function penerima()
{
    $data = [
        'title' => 'Daftar Penerima',
        'adminuser' => $this->adminuserModel
            ->where('status', 'disetujui')
            ->findAll()
    ];

    return view('adminuser/penerima', $data);
     
}
public function setujui($id_user)
{
    // Ubah status user menjadi disetujui
    $this->adminuserModel->update($id_user, [
        'status' => 'disetujui'
    ]);

    session()->setFlashdata('pesan', 'Pengajuan berhasil disetujui');
    return redirect()->to('/adminuser/penerima');
}
public function tolak($id_user)
{
    // Ubah status user menjadi ditolak
    $this->adminuserModel->update($id_user, [
        'status' => 'ditolak'
    ]);

    session()->setFlashdata('Pesan', 'Pengajuan berhasil ditolak');
    return redirect()->to('/adminuser/penerima');}

     public function edit_penerima($id_user)
    {
        $data = [
            'title' => 'Ubah Data Penerima',
            'validation' => \Config\Services::validation(),
            'adminuser' => $this->adminuserModel->getadminuser($id_user)
        ];

        return view('adminuser/edit_penerima', $data);
    }

    

}

 


