<?php

namespace App\Http\Controllers\Wilayah\Service;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Provinsi;
use App\Kota;
use App\Kecamatan;
use App\Kelurahan;

class WilayahService extends Controller
{
    public function provinsi()
    {
        $data = Provinsi::orderBy('name', 'ASC')->get();

        try {
            if (count($data)) {
                $message = 'Data Provinsi Ditemukan';
                $code = 200;
            } else {
                $message = 'Data Provinsi Tidak Ditemukan';
                $code = 404;
            }
        }
        catch (Exception $e) {
            \Log::error($e, ['gagal mendapatkan data provinsi' => $e->getMessage()." ".$e->getFile()." ".$e->getLine()]);
        }

        return response()->JSON([
            'message' => $message,
            'data' => $data,
            'status_code' => $code
        ]);
    }

    public function kota(Request $request)
    {
        $data = Kota::where('province_id',$request->province_id)->with('provinsi')->orderBy('name', 'ASC')->get();

        try {
            if (count($data)) {
                $message = 'Data Kota Ditemukan';
                $code = 200;
            } else {
                $message = 'Data Kota Tidak Ditemukan';
                $code = 404;
            }
        }
        catch (Exception $e) {
            \Log::error($e, ['gagal mendapatkan data kota' => $e->getMessage()." ".$e->getFile()." ".$e->getLine()]);
        }

        return response()->JSON([
            'message' => $message,
            'data' => $data,
            'status_code' => $code
        ]);
    }

    public function kecamatan(Request $request)
    {
        $data = Kecamatan::where('city_id',$request->city_id)->with('kota')->orderBy('name', 'ASC')->get();

        try {
            if (count($data)) {
                $message = 'Data Kecamatan Ditemukan';
                $code = 200;
            } else {
                $message = 'Data Kecamatan Tidak Ditemukan';
                $code = 404;
            }
        }
        catch (Exception $e) {
            \Log::error($e, ['gagal mendapatkan data kecamatan' => $e->getMessage()." ".$e->getFile()." ".$e->getLine()]);
        }

        return response()->JSON([
            'message' => $message,
            'data' => $data,
            'status_code' => $code
        ]);
    }

    public function kelurahan(Request $request)
    {
        $data = Kelurahan::where('district_id',$request->district_id)->orderBy('name', 'ASC')->get();

        try {
            if (count($data)) {
                $message = 'Data Kelurahan Ditemukan';
                $code = 200;
            } else {
                $message = 'Data Kelurahan Tidak Ditemukan';
                $code = 404;
            }
        }
        catch (Exception $e) {
            \Log::error($e, ['gagal mendapatkan data kecamatan' => $e->getMessage()." ".$e->getFile()." ".$e->getLine()]);
        }

        return response()->JSON([
            'message' => $message,
            'data' => $data,
            'status_code' => $code
        ]);
    }
}
