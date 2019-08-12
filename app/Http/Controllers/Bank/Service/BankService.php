<?php

namespace App\Http\Controllers\Bank\Service;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bank;

class BankService extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $data = Bank::where('status', 1)->get();
            if (count($data)) {
                $message = 'Data Ditemukan.';
                $code = 200;
            } else {
                $message = 'Data Tidak Ditemukan.';
                $code = 404;
            }

        } catch(\Exception $e){
            \Log::error($e, ['Failed to get data Bank' => $e->getMessage()." ".$e->getFile()." ".$e->getLine()]);
        }

        return response()->JSON([
            'message' => $message,
            'data' => $data,
            'status_code' => $code
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
