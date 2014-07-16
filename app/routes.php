<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

$NS = 'App\\Controllers\\';
//pelanggan controller
Route::get('/anggota', $NS.'PelangganController@pendaftaran');
Route::post('/anggota/pendaftaran/proses',$NS.'PelangganController@pendaftaranProses');
Route::get('/anggota/tampil',$NS.'PelangganController@tampil');
Route::get('/anggota/hapus/{id}',$NS.'PelangganController@hapus');
Route::get('/anggota/Edit/{id}',$NS.'PelangganController@Edit');
Route::post('/anggota/edit/proses',$NS.'PelangganController@editProses');
Route::get('/beranda', $NS.'IndexController@tampil');

$NP = 'App\\Controllers\\';
Route::get('/order',$NP.'PemesananControllers@lihat');
Route::get('/order/pesan',$NP.'PemesananControllers@pesan');
Route::post('/order/pesan/proses',$NP.'PemesananControllers@pesanProses');
Route::get('/order/edit/{id}',$NP.'PemesananControllers@edit');
Route::post('/order/edit/proses',$NP.'PemesananControllers@editProses');
Route::get('/order/delete/{id}',$NP.'PemesananControllers@delete');



$NT= 'App\\Controllers\\';
Route::get('/draft',$NT.'BungaController@tampil');//ke folder draf yang di eksekusi di controller untuk menampikan data bunga
Route::get('/draft/tambah',$NT.'BungaController@tambah');
Route::post('/draft/tambah/proses',$NT.'BungaController@tambahProses');
Route::get('/draft/ubah/{id}',$NT.'BungaController@ubah');
Route::post('/draft/ubah/proses',$NT.'BungaController@ubahProses');
Route::get('/draft/hapus/{id}',$NT.'BungaController@hapus');
Route::get('/draft/lihat',$NT.'BungaController@lihat');

