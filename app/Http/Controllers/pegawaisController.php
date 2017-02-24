<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Pegawai;
use App\User;
use App\Jabatan;
use App\Golongan;
use Input;
use File;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class pegawaisController extends Controller
{
    use RegistersUsers;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        return $this->middleware('auth');
    }
    public function index()
    {
        //
        $pegawaii = Pegawai::all();
        return view('pegawais.index', compact('pegawaii'));
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
        return view('pegawais.create', compact('jab', 'gol'));
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
            'name' => 'required|max:255',
            'Nip' => 'required|numeric|min:3|unique:pegawais',
            'permission' => 'required|max:255',
            'email' => 'required|email|max:100|unique:users',
            'password' => 'required|min:6|confirmed',
            ]); 

        
        $user = User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'permission' => $request->get('permission'),
            'password' => bcrypt($request->get('password')),
        ]);

        if($request->hasFile('Photo')){
            $uploaded_photo = $request->file('Photo');
            $extension = $uploaded_photo->getClientOriginalExtension();
            $filename = md5 (time()) . '.' . $extension;
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . '/image/';
            $uploaded_photo->move($destinationPath, $filename);

            $pegawai = new Pegawai;
            $pegawai->Nip = $request->get('Nip');
            $pegawai->user_id = $user->id;
            $pegawai->golongan_id = $request->get('golongan_id');
            $pegawai->jabatan_id = $request->get('jabatan_id');

            $pegawai->Photo = $filename;
            $pegawai->save();
        }

        
        return redirect('pegawai');
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
        $pegawaii = Pegawai::find($id);
        $jab = Jabatan::find($id);
        $gol = Golongan::find($id);
        return view('pegawais.show',compact('pegawaii','jab', 'gol'));
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
        $pegawaii = Pegawai::find($id);

        $jselect = Jabatan::whereIn('id',[$pegawaii->jabatan_id])->first();
        $jab = Jabatan::whereNotIn('id',[$pegawaii->jabatan_id])->get();
        $gselect = Golongan::whereIn('id',[$pegawaii->golongan_id])->first();
        $gol = Golongan::whereNotIn('id',[$pegawaii->golongan_id])->get();

        return view('pegawais.edit', compact('pegawaii', 'jselect', 'jab', 'gselect', 'gol'));
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
        $pegawai = Pegawai::find($id);
            $pegawai->Nip = $request->get('Nip');
            $pegawai->golongan_id = $request->get('golongan_id');
            $pegawai->jabatan_id = $request->get('jabatan_id');

        $this -> validate($request, [
            'Nip' => 'required|numeric|min:3|',
            ]);

        if($request->hasFile('Photo')){
            $filename = null;
            $uploaded_photo = $request->file('Photo');
            $extension = $uploaded_photo->getClientOriginalExtension();
            $filename = md5 (time()) . '.' . $extension;
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . '/image/';
            $uploaded_photo->move($destinationPath, $filename);
            if ($pegawai->Photo) {
                $old_photo = $pegawai->Photo;
                $filepath = public_path() . DIRECTORY_SEPARATOR . '/image/' . DIRECTORY_SEPARATOR . $pegawai->Photo;
                try {
                    File::delete($filepath);
                } catch(FileNotFoundException $e) {
                    // File sudah dihapus/tidak ada
                }
            }
            $pegawai->Photo = $filename;
        }
        $pegawai->save();

        return redirect('pegawai');
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
        Pegawai::find($id)->delete();
        return redirect('pegawai');
    }
}
