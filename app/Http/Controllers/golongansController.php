<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Golongan;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class golongansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
        $golong = Golongan::all();
        return view('golongans.index', compact('golong'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('golongans.create'); 
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
        $this -> validate($request, [
            'Kode_golongan' => 'required|min:3|unique:golongans',
            ]);

        $golong = new Golongan;
        $golong->Kode_golongan = $request->get('Kode_golongan');
        $golong->Nama_golongan = $request->get('Nama_golongan');
        $golong->Besaran_uang = $request->get('Besaran_uang');
        $golong->save();

        return redirect('golongan');
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
        $golong = Golongan::find($id);
        return view('golongans.edit', compact('golong'));
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
        $golong = Golongan::find($id);

        $this -> validate($request, [
            'Kode_golongan' => 'required|min:3',
            ]);

        $golong->Kode_golongan = $request->get('Kode_golongan');
        $golong->Nama_golongan = $request->get('Nama_golongan');
        $golong->Besaran_uang = $request->get('Besaran_uang');

        $golong->save();
        return redirect('golongan');
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
        Golongan::find($id)->delete();
        return redirect('golongan');
    }
}
