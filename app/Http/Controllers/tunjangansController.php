<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Tunjangans;
use App\Jabatan;
use App\Golongan;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class tunjangansController extends Controller
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
        $tunjang = Tunjangans::all();
        return view('tunjangans.index', compact('tunjang'));
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
        return view('tunjangans.create', compact('jab', 'gol'));
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
            'Kode_tunjangan' => 'required|min:3|unique:tunjangans',
            ]);

        $tunjang = new Tunjangans;
        $tunjang->Kode_tunjangan = $request->get('Kode_tunjangan');
        $tunjang->jabatan_id = $request->get('jabatan_id');
        $tunjang->golongan_id = $request->get('golongan_id');
        $tunjang->Status = $request->get('Status');
        $tunjang->Jumlah_anak = $request->get('Jumlah_anak');
        $tunjang->Besaran_uang = $request->get('Besaran_uang');
        $tunjang->save();

        return redirect('tunjangan');
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
        $tunjang = Tunjangans::find($id);

        $jselect = Jabatan::whereIn('id',[$tunjang->jabatan_id])->first();
        $jab = Jabatan::whereNotIn('id',[$tunjang->jabatan_id])->get();
        $gselect = Golongan::whereIn('id',[$tunjang->golongan_id])->first();
        $gol = Golongan::whereNotIn('id',[$tunjang->golongan_id])->get();
        
        return view('tunjangans.edit', compact('tunjang', 'jselect', 'jab', 'gselect', 'gol'));
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
        $tunjang = Tunjangans::find($id);

        $this -> validate($request, [
            'Kode_tunjangan' => 'required|min:3',
            ]);

        $tunjang->Kode_tunjangan = $request->get('Kode_tunjangan');
        $tunjang->jabatan_id = $request->get('jabatan_id');
        $tunjang->golongan_id = $request->get('golongan_id');
        $tunjang->Status = $request->get('Status');
        $tunjang->Jumlah_anak = $request->get('Jumlah_anak');
        $tunjang->Besaran_uang = $request->get('Besaran_uang');

        $tunjang->save();
        return redirect('tunjangan');
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
        Tunjangans::find($id)->delete();
        return redirect('tunjangan');
    }
}
