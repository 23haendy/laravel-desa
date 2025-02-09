<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('landing');
});
// Route::get('/stugas', 'StugasController@index');
// Route::get('/stugas/create', 'StugasController@create');

// Route::post('/stugas', 'StugasController@store');
// Route::get('/stugas/{id}', 'StugasController@show');
// Route::get('/stugas/{id}/edit', 'StugasController@edit');
// Route::put('/stugas/{id}', 'StugasController@update');
// Route::delete('/stugas/{id}', 'StugasController@destroy');
Route::resource('suket' , 'SuketController');


// Route::get('/sivitas', 'SivitasController@index');
// Route::get('/sivitas/create', 'SivitasController@create');

// Route::post('/sivitas', 'SivitasController@store');
// Route::get('/sivitas/{id}', 'SivitasController@show');
// Route::get('/sivitas/{id}/edit', 'SivitasController@edit');
// Route::put('/sivitas/{id}', 'SivitasController@update');
// Route::delete('/sivitas/{id}', 'SivitasController@destroy');

Route::resource('sipil' , 'SipilController');

// Route::get('/petugas', 'PetugasController@index');
// Route::get('/petugas/create', 'PetugasController@create');

// Route::post('/petugas', 'PetugasController@store');
// Route::get('/petugas/{id}', 'PetugasController@show');
// Route::get('/petugas/{id}/edit', 'PetugasController@edit');
// Route::put('/petugas/{id}', 'PetugasController@update');
// Route::delete('/petugas/{id}', 'PetugasController@destroy');

Route::resource('petugas' ,  'PetugasController');

Route::resource('profiles' ,  'ProfileController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/print/{id}', 'PrintController@print')->name('print');

Route::get('/export/{id}', 'SivitaExportController@export')->name('export');
