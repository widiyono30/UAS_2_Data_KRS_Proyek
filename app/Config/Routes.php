<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Halo
$routes->get('halo', 'Halo::index');
// Login
$routes->get('login', 'Login::index');
// Home Krs
$routes->get('/', 'Login::index');
$routes->get('login', 'Login::index');
$routes->post('login/auth', 'Login::auth');
$routes->get('login/logout', 'Login::logout');
$routes->get('register', 'Register::index');
$routes->post('register/save', 'Register::save');
//dashboard krs
$routes->get('krs', 'Krs::index',['filter' => 'auth']);
// $routes->get('krs', 'Krs::index',['filter' => 'auth']);
// Halaman Tambah
// $routes->get('krs/tambah', 'Krs::tambah');
$routes->get('krs/tambah', 'Krs::tambah',['filter' => 'auth']);
// Halaman Liht
// $routes->get('krs/edit/(:any)', 'Krs::edit/$1');
$routes->get('krs/lihat/(:any)', 'Krs::lihat/$1',['filter' => 'auth']);
// Halaman Edit
// $routes->get('krs/edit/(:any)', 'Krs::edit/$1');
$routes->get('krs/edit/(:any)', 'Krs::edit/$1',['filter' => 'auth']);
// Proses CRUD
// Insert
// $routes->post('krs/add', 'Krs::add');
$routes->post('krs/add', 'Krs::add',['filter' => 'auth']);
// Update
// $routes->post('krs/update', 'Krs::update');
$routes->post('krs/update', 'Krs::update',['filter' => 'auth']);
// Hapus
// $routes->get('krs/hapus/(:any)', 'Krs::hapus/$1');
$routes->get('krs/hapus/(:any)', 'Krs::hapus/$1',['filter' => 'auth']);
// cetak pdf
$routes->get('krs/view_pdf', 'Krs::view_pdf',['filter' => 'auth']);
