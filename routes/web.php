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

Route::get('/', function(){
    // return view('');
    return ('Page User');
});

Route::get('/noide-admin', function () {
    return view('admin.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('dashboard.index')->middleware('auth');

Route::prefix('bank')->group(function(){
    Route::get('list', 'Bank\Controller\BankController@index')->name('bank.list');
    Route::get('create', 'Bank\Controller\BankController@create')->name('bank.create');
    Route::post('store', 'Bank\Controller\BankController@store')->name('bank.store');
    Route::get('show/{id}', 'Bank\Controller\BankController@show')->name('bank.show');
    Route::get('edit/{id}', 'Bank\Controller\BankController@edit')->name('bank.edit');
    Route::post('update/{id}', 'Bank\Controller\BankController@update')->name('bank.update');
    Route::get('status', 'Bank\Controller\BankController@status')->name('bank.status');
});

Route::prefix('jenis')->group(function(){
    Route::get('list', 'Jenis\Controller\JenisController@index')->name('jenis.list');    
    Route::get('create', 'Jenis\Controller\JenisController@create')->name('jenis.create');    
    Route::post('store', 'Jenis\Controller\JenisController@store')->name('jenis.store');  
    Route::get('show/{id}', 'Jenis\Controller\JenisController@show')->name('jenis.show'); 
    Route::get('edit/{id}', 'Jenis\Controller\JenisController@edit')->name('jenis.edit'); 
    Route::post('update/{id}', 'Jenis\Controller\JenisController@update')->name('jenis.update'); 
    Route::get('status', 'Jenis\Controller\JenisController@status')->name('jenis.status');
});

Route::prefix('ukuran')->group(function(){
    Route::get('list', 'Ukuran\Controller\UkuranController@index')->name('ukuran.list');
    Route::get('create', 'Ukuran\Controller\UkuranController@create')->name('ukuran.create');
    Route::post('store', 'Ukuran\Controller\UkuranController@store')->name('ukuran.store');
    Route::get('show/{id}', 'Ukuran\Controller\UkuranController@show')->name('ukuran.show');
    Route::get('edit/{id}', 'Ukuran\Controller\UkuranController@edit')->name('ukuran.edit');
    Route::post('update/{id}', 'Ukuran\Controller\UkuranController@update')->name('ukuran.update');
});