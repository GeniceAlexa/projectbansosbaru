<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Halaman utama
$routes->get('/', 'pages::index');
$routes->get('pages', 'pages::index');
$routes->get('/dokum', 'pages::dokum');

// Halaman login
$routes->get('/login', 'logreg::login');
$routes->post('/process', 'logreg::loginProcess');

$routes->get('/register', 'logreg::register');
$routes->post('/register/save', 'logreg::saveRegister');

$routes->get('/adminuser/pengajuan', 'adminuser::index');
$routes->get('/user/profile', 'bansos::profil');


//Adminuser

$routes->get('/adminuser', 'adminuser::index');
$routes->get('/adminuser/pengajuan', 'adminuser::index');
$routes->get('/adminuser/penerima', 'adminuser::penerima');

// Edit penerima view
$routes->get('/adminuser/edit_penerima/(:num)', 'adminuser::edit_penerima/$1');

// Approve / reject pengajuan
$routes->get('/adminuser/setujui/(:num)', 'adminuser::setujui/$1');
$routes->get('/adminuser/tolak/(:num)', 'adminuser::tolak/$1');

$routes->get('/adminuser/edit/(:num)', 'adminuser::edit/$1');
$routes->post('/adminuser/update/(:num)', 'adminuser::update/$1');
$routes->get('/adminuser/hapus/(:num)', 'adminuser::hapus/$1');
$routes->get('/adminuser/tdokum', 'adminuser::tdokum');

// // Halaman admin
// $routes->get('/admin', 'bansos::admin');
// $routes->get('/pengajuan', 'bansos::pengajuan');

// // CRUD Admin
// $routes->get('/admin/ubah/(:num)', 'bansos::ubah/$1');
// $routes->post('/admin/update/(:num)', 'bansos::update/$1');
// $routes->get('/admin/hapus/(:num)', 'bansos::hapus/$1');

// Halaman user
$routes->get('/profile', 'bansos::profil');
// $routes->get('/dokumentasi', 'bansos::dokum');
$routes->get('/ganti', 'bansos::ganti');


// //admindokum
// $routes->get('/admindokum', 'admindokum::index');
// $routes->get('/admindokum/hapus/(:num)', 'admindokum::hapus/$1');

// // Halaman tambah dokumentasi (form)
// $routes->get('/admindokum/tambah', 'admindokum::tambah');
// // Proses simpan dokumentasi (form POST)
// $routes->post('/admindokum/simpan', 'admindokum::simpan');

// // Jika ingin akses via /admindokum/berita, arahkan ke index yang menampilkan daftar
// $routes->get('/admindokum/berita', 'admindokum::index');

// // tambahan route untuk kompatibilitas link lama
// $routes->get('/admindokum/tambah_data', 'admindokum::tambah');
// $routes->get('/menu/tambah', 'admindokum::tambah');
// $routes->post('/menu/simpan', 'admindokum::simpan');

// admindokum
$routes->get('/admindokum', 'admindokum::index');
$routes->get('/admindokum/tambah', 'admindokum::tambah');
$routes->post('/admindokum/simpan', 'admindokum::simpan');
$routes->get('/admindokum/hapus/(:num)', 'admindokum::hapus/$1');

// menu
$routes->get('/menu', 'menu::index');
$routes->get('/menu/tambah', 'menu::tambah');
$routes->post('/menu/simpan', 'menu::simpan');
$routes->get('/menu/hapus/(:num)', 'menu::hapus/$1');
$routes->get('/menu/detail/(:num)', 'menu::detail/$1');
$routes->get('/menu/ubah/(:num)', 'menu::ubah/$1');
$routes->post('/menu/update/(:num)', 'menu::update/$1');


