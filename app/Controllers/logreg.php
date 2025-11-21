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
            'password'   => $this->request->getPost('password'),

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
        $nik   = $this->request->getPost('nik');
        $password = $this->request->getPost('password');

        // Cari user berdasarkan email ATAU NIK
        $user = $userModel
            ->where('email', $email)
            ->orWhere('nik', $nik)
            ->first();

        // Jika user tidak ditemukan atau password salah
        if (!$user || $password !== $user['password']) {
            return redirect()->back()->with('error', 'Email atau password salah!');
        }

        // Login berhasil → set session
        session()->set([
            'logged_in' => true,
            'id_user'   => $user['id_user'],
            'nama'      => $user['nama'],
            'email'     => $user['email'],
            'nik'       => $user['nik'],
            'role'      => $user['role']
        ]);

        // Arahkan berdasarkan role
        if ($user['role'] === 'admin') {
            return redirect()->to('/adminuser/pengajuan');
        } else {
            return redirect()->to('/user/profile');
        }
    }


    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
