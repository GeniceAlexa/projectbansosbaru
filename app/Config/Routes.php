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
$routes->get('/user/upload', 'bansos::upload');
$routes->get('/user/ganti', 'bansos::ganti');


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
$routes->get('/ganti', 'bansos::ganti');
$routes->get('/upload', 'bansos::upload');
$routes->get('/status', 'bansos::status');

$routes->get('/status_page', 'bansos::index');

$routes->get('wilayah/kabupaten/(:num)', 'Wilayah::kabupaten/$1');




