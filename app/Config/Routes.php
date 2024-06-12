<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

//Routes buat Masyarakat
$routes->get('/', 'Masyarakat::home');
$routes->get('/masyarakat', 'Masyarakat::home', ['filter' => 'role:Masyarakat']);
$routes->get('/masyarakat/buat_pengaduan', 'Masyarakat::buat_pengaduan', ['filter' => 'role:Masyarakat']);
$routes->get('/masyarakat/statusbelumditanggapi/belum ditanggapi', 'Masyarakat::statusbelum', ['filter' => 'role:Masyarakat']);
$routes->get('/masyarakat/statusproses/ proses', 'Masyarakat::statusproses', ['filter' => 'role:Masyarakat']);
$routes->get('/masyarakat/statusselesai/ selesai', 'Masyarakat::statusselesai', ['filter' => 'role:Masyarakat']);
$routes->get('/masyarakat/statusditolak/ ditolak', 'Masyarakat::statustolak', ['filter' => 'role:Masyarakat']);
$routes->get('/masyarakat/detail_pengaduan/(:num)', 'Masyarakat::detail_pengaduan/$1', ['filter' => 'role:Masyarakat']);
$routes->get('/masyarakat/edit_pengaduan/(:num)', 'Masyarakat::edit_pengaduan/$1', ['filter' => 'role:Masyarakat']);
$routes->get('/masyarakat/myprofile', 'Masyarakat::myprofile', ['filter' => 'role:Masyarakat']);

//Routes buat Admin
$routes->get('/', 'Admin::dashboard');
$routes->get('/admin', 'Admin::dashboard', ['filter' => 'role:Admin']);
$routes->get('/admin/dashboard', 'Admin::dashboard', ['fi`lter' => 'role:Admin']);
$routes->get('/admin/data_pengaduan', 'Admin::data_pengaduan', ['filter' => 'role:Admin']);
$routes->get('/admin/list_user', 'Admin::list_user', ['filter' => 'role:Admin']);
$routes->get('/admin/(:num)', 'Admin::detail/$1', ['filter' => 'role:Admin']);
$routes->get('/admin/detail_pengaduan/(:num)', 'Admin::detail_pengaduan/$1', ['filter' => 'role:Admin']);
$routes->get('/admin/tambah_kategori', 'Admin::tambah_kategori', ['filter' => 'role:Admin']);
$routes->get('/admin/data_kategori', 'Admin::data_kategori', ['filter' => 'role:Admin']);
$routes->get('/admin/edit_kategori/(:num)', 'Admin::edit_kategori/$1', ['filter' => 'role:Admin']);
$routes->get('/admin/laporan_aplikasi', 'Admin::laporan_aplikasi', ['filter' => 'role:Admin']);
$routes->get('/admin/customreport', 'Admin::customreport', ['filter' => 'role:Admin']);
$routes->get('/admin/myprofile', 'Admin::myprofile', ['filter' => 'role:Admin']);
$routes->get('/admin/tambah_user', 'Admin::tambah_user', ['filter' => 'role:Admin']);
$routes->get('/admin/generatePDF', 'Admin::generatePDF', ['filter' => 'role:Admin']);
$routes->get('/admin/excel', 'Admin::excel', ['filter' => 'role:Admin']);

//Routes buat Petugas
$routes->get('/', 'Petugas::dashboard');
$routes->get('/petugas', 'Petugas::dashboard', ['filter' => 'role:Petugas']);
$routes->get('/petugas/dashboard', 'Petugas::dashboard', ['filter' => 'role:Petugas']);
$routes->get('/petugas/belumverifikasi', 'Petugas::belumverifikasi', ['filter' => 'role:Petugas']);
$routes->get('/petugas/myprofile', 'Petugas::myprofile', ['filter' => 'role:Petugas']);
$routes->get('/petugas/detail_pengaduan/(:num)', 'Petugas::detail_pengaduan/$1', ['filter' => 'role:Petugas']);
$routes->get('/petugas/tolak/(:num)', 'Petugas::tolak/$1', ['filter' => 'role:Petugas']);

//Routes buat petugas kategorial
$routes->get('/', 'Kategorial::index');
$routes->get('/kategorial', 'Kategorial::index', ['filter' => 'permission:kategorial']);
$routes->get('/kategorial/index', 'Kategorial::index', ['filter' => 'permission:kategorial']);
$routes->get('/kategorial/myprofile', 'Kategorial::myprofile', ['filter' => 'permission:kategorial']);
$routes->get('/kategorial/sudahverifikasi', 'Kategorial::sudahverifikasi', ['filter' => 'permission:kategorial']);
$routes->get('/kategorial/sudahproses', 'Kategorial::sudahproses', ['filter' => 'permission:kategorial']);
$routes->get('/kategorial/sudahselesai', 'Kategorial::sudahselesai', ['filter' => 'permission:kategorial']);
$routes->get('/kategorial/detail_pengaduan/(:num)', 'Kategorial::detail_pengaduan/$1', ['filter' => 'permission:kategorial']);
$routes->get('/kategorial/tanggapi/(:num)', 'Kategorial::tanggapi/$1', ['filter' => 'permission:kategorial']);


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}