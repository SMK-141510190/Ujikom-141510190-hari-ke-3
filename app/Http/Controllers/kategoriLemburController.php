<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Jabatan;
use App\Golongan;
use App\Kategori_lembur;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class kategoriLemburController extends Controller
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
        $lembur = Kategori_lembur::all();
        return view('kategoriLembur.index', compact('lembur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $jab = Jabatan::all();
        $gol = Golongan::all();
        return view('kategoriLembur.create', compact('jab', 'gol'));
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
            'Kode_lembur' => 'required|min:3|unique:kategori_lemburs',
            ]);

        $lembur = new Kategori_lembur;
        $lembur->Kode_lembur = $request->get('Kode_lembur');
        $lembur->golongan_id = $request->get('golongan_id');
        $lembur->jabatan_id = $request->get('jabatan_id');
        $lembur->Besaran_uang = $request->get('Besaran_uang');
        $lembur->save();

        return redirect('kategorilembur');
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
        $lembur = Kategori_lembur::find($id);

        $jselect = Jabatan::whereIn('id',[$lembur->jabatan_id])->first();
        $jab = Jabatan::whereNotIn('id',[$lembur->jabatan_id])->get();
        $gselect = Golongan::whereIn('id',[$lembur->golongan_id])->first();
        $gol = Golongan::whereNotIn('id',[$lembur->golongan_id])->get();

        return view('kategoriLembur.edit', compact('lembur', 'jselect', 'jab', 'gselect', 'gol'));
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
        $lembur = Kategori_lembur::find($id);

        $this -> validate($request, [
            'Kode_lembur' => 'required|min:3',
            ]);

        $lembur->Kode_lembur = $request->get('Kode_lembur');
        $lembur->golongan_id = $request->get('golongan_id');
        $lembur->jabatan_id = $request->get('jabatan_id');
        $lembur->Besaran_uang = $request->get('Besaran_uang');

        $lembur->save();
        return redirect('kategorilembur');
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
        Kategori_lembur::find($id)->delete();
        return redirect('kategorilembur');
    }
}
