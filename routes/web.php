<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');

});



Auth::routes();
//mengarahkan register untuk ke halaman login
Route::match(['get', 'post'], '/register', function () {
    return redirect('login');
});


Route::get('/home', 'HomeController@index')->name('home');
// route resource sudah memiliki function yg lengkap
Route::resource('/tunjangan', TunjanganController::class);

Route::resource('/jabatan', JabatanController::class);

Route::resource('/berita', BeritaController::class);

Route::resource('/konten', KontenController::class);

Route::resource('/karyawan', KaryawanController::class);

// Route::resource('/gaji', GajiController::class);
Route::get('/gaji', 'GajiController@index');

Route::get('/tambah-gaji/{id}', 'GajiController@create_gaji');
Route::get('/show-gaji/{id}', 'GajiController@show');

Route::resource('gaji', 'GajiController');
