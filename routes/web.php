<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;

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
    return view('auth.login');
});

Auth::routes();

Route::resource('kelas', 'KelasController')->middleware('checkRole:admin');
Route::resource('datamaster/petugas', 'PetugasController')->middleware('checkRole:admin');
Route::resource('datamaster/surat', 'SuratController')->middleware('checkRole:admin');
Route::resource('siswa', 'SiswaController')->middleware('checkRole:admin');
Route::resource('home', 'HomeController')->middleware('checkRole:admin');
Route::resource('suratmasuk', 'SuratmasukController')->middleware('checkRole:admin');


Route::get('/home', 'HomeController@index')->name('dashboard')->middleware('checkRole:admin');
Route::get('/kelas', 'KelasController@index')->name('kelas')->middleware('checkRole:admin');
Route::get('/datamaster/petugas', 'PetugasController@index')->name('petugas')->middleware('checkRole:admin');
Route::get('/datamaster/surat', 'SuratController@index')->name('surat')->middleware('checkRole:admin');
Route::get('/siswa', 'SiswaController@index')->name('siswa')->middleware('checkRole:admin');
Route::get('/suratmasuk', 'SuratmasukController@index')->name('suratmasuk')->middleware('checkRole:admin');
Route::get('/suratmasuk/{surat}', 'SuratmasukController@show')->name('suratmasuk.show')->middleware('checkRole:admin');


Route::get('admin', function () { return view('admin'); })->middleware('checkRole:admin');
Route::get('hubin','HubinController@index')->name('hubin')->middleware(['checkRole:admin,hubin']);
// Route::get('siswa', function () { return view('siswa'); });

Route::get('/test-pdf' , 'PdfController@pdf')->name('pdf');