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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function () {
    Route::prefix('wilayah')->group(function() {
        Route::get('provinsi', 'Wilayah\Service\WilayahService@provinsi');
        Route::get('kota', 'Wilayah\Service\WilayahService@kota');
        Route::get('kecamatan', 'Wilayah\Service\WilayahService@kecamatan');
        Route::get('kelurahan', 'Wilayah\Service\WilayahService@kelurahan');
    });

});