<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Kategori_lembur;
use App\Pegawai;
use App\Lembur_pegawai;
use App\Jabatan;
use App\Golongan;
use DB;

class lemburPegawaisController extends Controller
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
        $lmbpegawai = Lembur_pegawai::all();
        $katlmb = Kategori_lembur::all();
        $jab = Jabatan::all();
        $gol = Golongan::all();
        $pegawai = Pegawai::all();
        return view('lemburpegawais.index', compact('lmbpegawai', 'katlmb', 'jab', 'gol', 'pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $katlmb = Kategori_lembur::all();
        $pegawai = Pegawai::all();
        return view('lemburpegawais.create', compact('katlmb', 'pegawai'));
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
        $lmbpegawai = $request->all();
        $pegawai = Pegawai::where('id', $lmbpegawai['pegawai_id'])->first();
        $katlmb = Kategori_lembur::where('jabatan_id', $pegawai->jabatan_id)->where('golongan_id', $pegawai->golongan_id)->first();

        $lemburpegawai = Lembur_pegawai::create([
            'Kode_lembur_id' => $katlmb->id,
            'pegawai_id' => $lmbpegawai['pegawai_id'],
            'Jumlah_jam' => $lmbpegawai['Jumlah_jam']]);

        //Lembur_pegawai::create($lmbpegawai);
        return redirect('lemburpegawai');
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
        $lmbpegawai = Lembur_pegawai::find($id);

        $kselect = Kategori_lembur::whereIn('id',[$lmbpegawai->Kode_lembur_id])->first();
        $katlmb = Kategori_lembur::whereNotIn('id',[$lmbpegawai->Kode_lembur_id])->get();
        $pselect = Pegawai::whereIn('id',[$lmbpegawai->pegawai_id])->first();
        $pegawai = Pegawai::whereNotIn('id',[$lmbpegawai->pegawai_id])->get();

        return view('lemburpegawais.edit', compact('lmbpegawai', 'kselect', 'katlmb', 'pselect', 'pegawai'));
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
        /*$lmbpegawai = Lembur_pegawai::find($id);
        $pegawai = Pegawai::where('id', $lmbpegawai['pegawai_id'])->first();
        $katlmb = Kategori_lembur::where('jabatan_id', $pegawai->jabatan_id)->where('golongan_id', $pegawai->golongan_id)->first();


        /*$lmbpegawai->Kode_lembur_id = $katlmb->id;
        $lmbpegawai->pegawai_id = $request->get('pegawai_id');
        $lmbpegawai->Jumlah_jam = $request->get('Jumlah_jam');
        $lmbpegawai->save();*/

        /*$lemburpegawai = Lembur_pegawai::update([
            'Kode_lembur_id' => $katlmb->id,
            'pegawai_id' => $lmbpegawai['pegawai_id'],
            'Jumlah_jam' => $lmbpegawai['Jumlah_jam']]);*/

        $lmbpegawaiUpdate = $request->all();
        $lmbpegawai = Lembur_pegawai::find($id);
        $lmbpegawai->update($lmbpegawaiUpdate);
        return redirect('lemburpegawai');
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
        Lembur_pegawai::find($id)->delete();
        return redirect('lemburpegawai');
    }
}
