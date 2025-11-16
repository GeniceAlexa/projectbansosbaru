<?php

namespace App\Controllers;

use App\Models\adminuserModel;

class logreg extends BaseController
{
    public function register()
    {
        return view('logreg/register');
    }

    public function saveRegister()
    {
        $userModel = new adminuserModel();

        $data = [
            'nama'       => $this->request->getPost('nama'),
            'nik'        => $this->request->getPost('nik'),
            'email'      => $this->request->getPost('email'),
            'no_hp'      => $this->request->getPost('no_hp'),
            'provinsi'   => $this->request->getPost('provinsi'),
            'kota'       => $this->request->getPost('kota'),
            'kecamatan'  => $this->request->getPost('kecamatan'),
            'kelurahan'  => $this->request->getPost('kelurahan'),
            'alamat'     => $this->request->getPost('alamat'),
            'kode_pos'   => $this->request->getPost('kode_pos'),
            'password'   => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),

            'role'       => 'user'
        ];

        $userModel->insert($data);

        return redirect()->to('/login')->with('success', 'Pendaftaran berhasil!');
    }

    public function login()
    {
        return view('logreg/login');
    }

    public function loginProcess()
{
    $userModel = new adminuserModel();

    $email = $this->request->getPost('email');
    $password = $this->request->getPost('password');

    $user = $userModel->where('email', $email)->first();

    if ($user && password_verify($password, $user['password'])) {

        // Simpan session
        session()->set([
            'logged_in' => true,
            'id_user'   => $user['id_user'],
            'nama'      => $user['nama'],
            'email'     => $user['email'],
            'role'      => $user['role']
        ]);

        // Arahkan berdasarkan role
        if ($user['role'] === 'admin') {
            return redirect()->to('/adminuser/pengajuan');
        } else {
            return redirect()->to('/user/profile');
        }

    } else {
        return redirect()->back()->with('error', 'Email atau password salah!');
    }
}


    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
