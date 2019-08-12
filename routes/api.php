<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('v1')->group(function () {
    Route::prefix('wilayah')->group(function() {
        Route::get('provinsi', 'Wilayah\Service\WilayahService@provinsi');
        Route::get('kota', 'Wilayah\Service\WilayahService@kota');
        Route::get('kecamatan', 'Wilayah\Service\WilayahService@kecamatan');
        Route::get('kelurahan', 'Wilayah\Service\WilayahService@kelurahan');
    });

    Route::prefix('user')->group(function(){
        Route::post('register', 'User\Service\UserService@register');
    });

    Route::prefix('bank')->group(function(){
        Route::get('list', 'Bank\Service\BankService@index');
    });
    // Route::middleware('auth:api')->get('/user', function (Request $request) {
    //     return $request->user();
    // });
    Route::group(['middleware' => 'auth:api'], function () {

    });
});