<?php

namespace App\Http\Controllers\Bank\Controller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bank;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bank = Bank::where('deleted_at',null)->get();
        return view('bank.index', compact('bank'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bank.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $this->validate($request, [
                'nama_bank' => 'required',
                'no_rek' => 'required|unique:bank',
                'cabang' => 'required',
                'atas_nama' => 'required'
            ]);
    
            Bank::create([
                'nama_bank' => $request->nama_bank,
                'no_rek' => $request->no_rek,
                'cabang' => $request->cabang,
                'atas_nama' => $request->atas_nama,
            ]);
    
            return redirect()->route('bank.list');

        } catch (Exception $e) {
            $e->getMessage()." ".$e->getFile()." ".$e->getLine();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bank = Bank::where('id', $id)->first();
        return view('bank.show', compact('bank'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bank = Bank::where('id',$id)->first();
        return view('bank.update', compact('bank'));
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
        try {
            $this->validate($request, [
                'nama_bank' => 'required',
                'no_rek' => 'required|unique:bank',
                'cabang' => 'required',
                'atas_nama' => 'required'
            ]);
    
            Bank::where('id', $id)->update([
                'nama_bank' => $request->nama_bank,
                'no_rek' => $request->no_rek,
                'cabang' => $request->cabang,
                'atas_nama' => $request->atas_nama,
            ]);
    
            return redirect()->route('bank.list');

        } catch (Exception $e) {
            $e->getMessage()." ".$e->getFile()." ".$e->getLine();
        }
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

    public function status(Request $request)
    {
        $bank = Bank::find($request->id);
        $bank->status = $request->status;
        $bank->save();
  
        return response()->json([
            'success' => 'Status berhasil diubah'
        ]);
    }
}
