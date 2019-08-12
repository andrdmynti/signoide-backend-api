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