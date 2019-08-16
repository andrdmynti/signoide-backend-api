<?php

namespace App\Http\Controllers\Jenis\Controller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Jenis;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenis = Jenis::where('deleted_at',null)->get();
        return view('jenis.index', compact('jenis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jenis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $this->validate($request, [
                'jenis'  => 'required|unique:jenis',
                'detail' => 'required',
            ]);

            Jenis::create([
                'jenis'  => $request->jenis,
                'detail' => $request->detail,
            ]);
            
        } catch (\Exception $e){
            $e->getMessage()." ".$e->getFile()."".$e->getLine();
        }
        return redirect()->route('jenis.list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jenis = Jenis::where('id', $id)->first();
        return view('jenis.show', compact('jenis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jenis = Jenis::where('id', $id)->first();
        return view('jenis.update',compact('jenis'));
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
        try{
            $this->validate($request, [
                'jenis'  => 'required|unique:jenis',
                'detail' => 'required',
            ]);

            Jenis::where('id', $id)->update([
                'jenis'  => $request->jenis,
                'detail' => $request->detail,
            ]);
            
        } catch (\Exception $e){
            $e->getMessage()." ".$e->getFile()."".$e->getLine();
        }

        return redirect()->route('jenis.list');
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
        $jenis = Jenis::find($request->id);
        $jenis->status = $request->status;
        $jenis->save();
  
        return response()->json([
            'success' => 'Status berhasil diubah'
        ]);
    }
}
