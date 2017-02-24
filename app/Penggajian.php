<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penggajian extends Model
{
    //

    protected $table = 'penggajians';
    protected $fillable = ['tunjangan_pegawai_id', 'Jumlah_jam_lembur', 'Jumlah_uang_lembur', 'Gaji_pokok', 'Total_gaji', 'Tanggal_pengambilan', 'Status_pengambilan', 'Petugas_penerima'];
    protected $visible = ['tunjangan_pegawai_id', 'Jumlah_jam_lembur', 'Jumlah_uang_lembur', 'Gaji_pokok', 'Total_gaji', 'Tanggal_pengambilan', 'Status_pengambilan', 'Petugas_penerima'];
    public $timestamps = true;

    public function Tunjangan_pegawai(){
    	return $this->belongsTo('App\Tunjangan_pegawai', 'tunjangan_pegawai_id');
    }
}
