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
$routes->get('/login', 'adminuser::login');
$routes->get('/register', 'adminuser::register');

//Adminuser

$routes->get('/adminuser', 'adminuser::index');
// $routes->get('/adminuser/edit', 'adminuser::edit');
$routes->get('/adminuser/edit/(:num)', 'adminuser::edit/$1');
$routes->post('/adminuser/update/(:num)', 'adminuser::update/$1');
$routes->get('/adminuser/hapus/(:num)', 'adminuser::hapus/$1');

$routes->get('/pengajuan', 'adminuser::index');

// // Halaman admin
// $routes->get('/admin', 'bansos::admin');
// $routes->get('/pengajuan', 'bansos::pengajuan');

// // CRUD Admin
// $routes->get('/admin/ubah/(:num)', 'bansos::ubah/$1');
// $routes->post('/admin/update/(:num)', 'bansos::update/$1');
// $routes->get('/admin/hapus/(:num)', 'bansos::hapus/$1');

// Halaman user
// $routes->get('/profil', 'bansos::profil');
// $routes->get('/dokumentasi', 'bansos::dokum');
$routes->get('/ganti', 'bansos::ganti');
