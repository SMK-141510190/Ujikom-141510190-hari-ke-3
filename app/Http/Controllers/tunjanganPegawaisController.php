<?php

namespace App\Http\Controllers;

use Request;
use App\Tunjangan_pegawai;
use App\Pegawai;
use App\Tunjangans;

class tunjanganPegawaisController extends Controller
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
        $tunjangpegawai = Tunjangan_pegawai::all();
        return view('tunjanganspegawai.index', compact('tunjangpegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tunjang = Tunjangans::all();
        $pegawai = Pegawai::all();
        return view('tunjanganspegawai.create', compact('pegawai', 'tunjang'));
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
        $tunjangpegawai = Request::all();
        Tunjangan_pegawai::create($tunjangpegawai);
        return redirect('tpegawai');
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
        $tunjangpegawai = Tunjangan_pegawai::find($id);

        $tpselect = Tunjangans::whereIn('id',[$tunjangpegawai->Kode_tunjangan_id])->first();
        $tunjang = Tunjangans::whereNotIn('id',[$tunjangpegawai->Kode_tunjangan_id])->get();
        $pselect = Pegawai::whereIn('id',[$tunjangpegawai->pegawai_id])->first();
        $pegawai = Pegawai::whereNotIn('id',[$tunjangpegawai->pegawai_id])->get();
        
        return view('tunjanganspegawai.edit', compact('tunjangpegawai', 'tpselect', 'tunjang', 'pselect', 'pegawai'));
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
        $tunjangpegawaiUpdate = Request::all();
        $tunjangpegawai = Tunjangan_pegawai::find($id);
        $tunjangpegawai->update($tunjangpegawaiUpdate);
        return redirect('tpegawai');
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
        Tunjangan_pegawai::find($id)->delete();
        return redirect('tpegawai');
    }
}
