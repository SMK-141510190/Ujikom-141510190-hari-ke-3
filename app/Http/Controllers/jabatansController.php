<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Jabatan;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class jabatansController extends Controller
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
        $jabat = Jabatan::all();
        return view('jabatans.index', compact('jabat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('jabatans.create');

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
            'Kode_jabatan' => 'required|min:3|unique:jabatans',
            'Nama_jabatan' => 'required|max:255|unique:jabatans',
            ]);

        $jabat = new jabatan;
        $jabat->Kode_jabatan = $request->get('Kode_jabatan');
        $jabat->Nama_jabatan = $request->get('Nama_jabatan');
        $jabat->Besaran_uang = $request->get('Besaran_uang');
        $jabat->save();

        return redirect('jabatan');
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
        $jabat = Jabatan::find($id);
        return view('jabatans.edit', compact('jabat'));
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
        $jabat = Jabatan::find($id);

        $this -> validate($request, [
            'Kode_jabatan' => 'required|min:3',
            ]);

        $jabat->Kode_Jabatan = $request->get('Kode_jabatan');
        $jabat->Nama_Jabatan = $request->get('Nama_jabatan');
        $jabat->Besaran_uang = $request->get('Besaran_uang');

        $jabat->save();
        return redirect('jabatan');
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
        Jabatan::find($id)->delete();
        return redirect('jabatan');
    }
}
