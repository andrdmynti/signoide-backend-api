<?php

namespace App\Http\Controllers\Ukuran\Controller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Ukuran;

class UkuranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ukuran = Ukuran::where('deleted_at', null)->get();
        return view('ukuran.index', compact('ukuran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ukuran.create');
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
                'ukuran'  => 'required|unique:ukuran',
                'detail' => 'required',
            ]);

            Ukuran::create([
                'ukuran' => $request->ukuran,
                'detail' => $request->detail
            ]);

        } catch(\Exception $e){
            $e->getMessage()." ".$e->getFile()."".$e->getLine();
        }

        return redirect()->route('ukuran.list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ukuran = Ukuran::where('id', $id)->first();
        return view('ukuran.show',compact('ukuran'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ukuran = Ukuran::where('id',$id)->first();
        return view('ukuran.update', compact('ukuran'));
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
                'ukuran'  => 'required|unique:ukuran',
                'detail' => 'required',
            ]);

            Ukuran::where('id',$id)->update([
                'ukuran' => $request->ukuran,
                'detail' => $request->detail
            ]);
        } catch (\Exception $e) {
            $e->getMessage()." ".$e->getFile()."".$e->getLine();            
        }

        return redirect()->route('ukuran.list');
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
